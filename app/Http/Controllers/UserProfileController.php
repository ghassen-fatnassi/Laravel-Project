<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use App\Models\ArticleView;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{

    public function show(User $user)
    {
        //sparks start
        $bookmarks_count = DB::table('articles')
        ->join('users', 'articles.author_id', '=', 'users.id')
        ->where('users.id', $user->id)
        ->sum('articles.bookmarks');
        $likes_count = DB::table('articles')
        ->join('users', 'articles.author_id', '=', 'users.id')
        ->where('users.id', $user->id)
        ->sum('articles.likes');
        $comments_count = DB::table('articles')
        ->join('users', 'articles.author_id', '=', 'users.id')
        ->where('users.id', $user->id)
        ->sum('articles.comments');
        $reads_count=DB::table('articles')
        ->join('article_views', 'article_views.article_id', '=', 'articles.id')
        ->where('article_views.viewer_id', $user->id)
        ->sum('article_views.article_id');
        $sparks=array('bookmarks_count'=>$bookmarks_count,'comments_count'=>$comments_count,'likes_count'=>$likes_count,'read_count'=>$reads_count);
        //sparks end

        //spider start
        $user_readers = DB::select('SELECT a.category, COUNT(av.viewer_id) AS views_count
        FROM articles a
        JOIN article_views av ON a.id = av.article_id
        WHERE a.author_id = ?
        GROUP BY a.category;', [$user->id]);
        $user_reads=DB::select('SELECT a.category, COUNT(av.article_id)AS articles_count
        FROM articles a
        JOIN article_views av ON a.id = av.article_id
        WHERE av.viewer_id = ?
        GROUP BY a.category;', [$user->id]);
        $spider=array('user_readers'=>$user_readers,'user_reads'=>$user_reads);
        //spider end

        //curve start
        $readers_per_date=DB::select("SELECT DATE_FORMAT(av.created_at, '%Y-%m-%d') AS view_date,COUNT(av.viewer_id)AS views_count
        FROM articles a
        JOIN article_views av ON a.id = av.article_id
        WHERE a.author_id = ? AND av.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH) AND av.created_at <= CURRENT_DATE
        GROUP BY DATE_FORMAT(av.created_at, '%Y-%m-%d');", [$user->id]);
        $curve=$readers_per_date;
        //curve end

        //heatmap start
        $logins_per_date=DB::select("SELECT DATE_FORMAT(ul.created_at, '%Y-%m-%d') AS login_date,COUNT(ul.logger_id)AS login_count
        FROM user_logins ul
        WHERE ul.logger_id = ?
        GROUP BY DATE_FORMAT(ul.created_at, '%Y-%m-%d');", [$user->id]);
        $heatmap=$logins_per_date;
        //heatmap end
        $latestArticles = $user->articles()->latest()->get();
        $dashboard=array('sparks'=>$sparks, 'spider'=>$spider, 'curve'=>$curve, 'heatmap'=>$heatmap);
        return view('profile',compact('user','dashboard','latestArticles','bookmarks_count','comments_count','likes_count'));  
    }

    public function submit(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'shortbio' => 'nullable|string|max:255',
            'institution' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:4096',
            'phone' => 'nullable|string|max:20',
            'twitter' => 'nullable|string|max:511|url',
            'github' => 'nullable|string|max:511|url',
            'linkedin' => 'nullable|string|max:511|url',
            'old_password' => 'required_with:new_password|string|min:8', // Require old password if new password is provided
            'new_password' => 'nullable|string|min:8',
            'confirm_password' => 'same:new_password', // Ensure confirmation matches new password
        ]);
    
        // Find the user by ID
        $user = User::find($request->id);
    
        // Check if old password matches
        if ($request->filled('old_password')) {
            if (!Hash::check($request->old_password, $user->password)) {
                return back()->withErrors(['old_password' => 'The old password is incorrect.']);
            }
        }
        //dd($request->all());
        if($request->hasFile('photo'))
        {
            $path = $request->file('photo')->store('public/images');
            if ($user->avatar) 
            {
                Storage::delete($user->avatar);
            }
            $user->avatar = $path;
        }
        
        // Update user information
        $user->name = $request->name;
        $user->email = $request->email;
        $user->shortbio = $request->shortbio;
        $user->institution = $request->institution;
        $user->phone = $request->phone;
        $user->twitter = $request->twitter;
        $user->github = $request->github;
        $user->linkedin = $request->linkedin;


        // Update password if new password is provided
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }
    
        // Save changes to the database
        $user->save();
    
        // Redirect back or to a success page with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string|min:8', // Require old password to delete the account
        ]);
        // Find the user by ID
        $user = User::find($request->id);
        // Check if old password matches
        if ($request->filled('old_password')) {
            if (!Hash::check($request->old_password, $user->password)) 
            {
                return back()->withErrors(['old_password' => 'The old password is incorrect.\n account not deleted']);
            }
            else
            {
                DB::table('users')->where('id', $user->id)->delete();
                return view('home');
            }
        }
    }
}