<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserProfileController extends Controller
{

    public function show(User $user)
    {
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

        return view('profile',compact('user','bookmarks_count','likes_count','comments_count'));
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
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:4096',
            'phone' => 'required|string|max:20',
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
                return view('/');

            }
        }

    }
}