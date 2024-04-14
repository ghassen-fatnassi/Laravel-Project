@foreach($articles as $article)
<div class="article-container">
    <div class="article-category-date">
        @if($category=='programming-web-mobile')
        <a href="">Programming</a>
        @elseif($category=='artificial-intelligence')
        <a href="">Artificial Intelligence</a>
        @elseif($category=='machine-learning')
        <a href="">Machine Learning</a>
        @elseif($category=='cyber-security')
        <a href="">Cyber Security</a>
        @endif
        <span class="date">{{ $article->formattedDate }}</span>
        
    </div>
    <div class="article-info">
        <div class="article-text">
            <div class="article-title">
                <a href="{{ route('articles.show', ['article' => $article->id]) }}">
                    <h2>{{$article->title}}</h2>
                </a>
            </div>
            <div class="article-subtext">
                {{$article->description}}
            </div>
            <div class="article-author-avatar">
                <a href="{{ route('user.show', ['user' => $article->author_id]) }}">
                    <div class="article-author">{{$article->author->name}}</div>
                    </a>
                <div class="article-avatar">
                    <img style="border-radius: 50px;" src="{{ Storage::url($article->author->avatar) }}" alt="">
                </div>
                
            </div>
        </div>
        <div class="article-img" data-aos="fade-down">
            <a href="{{ route('articles.show', ['article' => $article->id]) }}"><img src="{{ asset('assets/burgerking.webp') }}" alt=""></a>
        </div>

    </div>
</div>
@endforeach