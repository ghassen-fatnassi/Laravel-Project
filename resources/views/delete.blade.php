<!-- Check if the user is authenticated -->
@auth
    <!-- Check if the user has the role of Admin -->
    @if(auth()->user()->hasRole('Admin'))
        <!-- Display the delete button for Admin -->
        <form method="POST" action="{{ route('articles.destroy', ['article' => $article->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    <!-- Check if the user has the role of User and is the author of the article -->
    @elseif(auth()->user()->hasRole('User') && $article->author_id == auth()->id())
        <!-- Display the delete button for the User who is the author of the article -->
        <form method="POST" action="{{ route('articles.destroy', ['article' => $article->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endif
@endauth
