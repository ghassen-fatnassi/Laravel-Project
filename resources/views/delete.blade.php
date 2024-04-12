@auth
    @if(auth()->user()->usertype === 'admin' || auth()->user()->id === $article->author_id)
        <form method="POST" action="{{ route('articles.destroy', ['article' => $article->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="icon-button">
                <i class='bx bx-x-circle bx-md'></i>
            </button>
        </form>
    @endif
@endauth
<style>
    .icon-button {
    border: none;
    background: none;
    padding: 0;
    cursor: pointer;
    color:#ccb191;
    
}
.dark-mode .icon-button{
        color:#9f5999;
    }

</style>