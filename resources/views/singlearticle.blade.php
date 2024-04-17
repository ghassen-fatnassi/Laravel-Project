<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$article->title}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federo&family=Gloock&family=Manuale:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/singlearticle.css') }}">

</head>

<body>
    @include('navbar')


    <div class=" container">
        <article class="t-content__article-wrapper" data-article-content="">
            <div class="t-content__section a-tag">
                @switch($article->category)
                @case('programming-web-mobile')
                <a href="{{ route('category.show', ['category' => 'programming-web-mobile']) }}" class="a-tag__wrapper">Programming web/mobile</a>
                @break
                @case('artificial-intelligence')
                <a href="{{ route('category.show', ['category' => 'artificial-intelligence']) }}" class="a-tag__wrapper">Artificial Intelligence</a>
                @break
                @case('machine-learning')
                <a href="{{ route('category.show', ['category' => 'machine-learning']) }}" class="a-tag__wrapper">Machine Learning</a>
                @break
                @case('cyber-security')
                <a href="{{ route('category.show', ['category' => 'cyber-security']) }}" class="a-tag__wrapper">Cyber Security</a>
                @break
                @endswitch
            </div>
            <h1 class="t-content__title a-page-title">{{$article->title}}</h1>
            <p class="t-content__chapo">{{$article->description}}</p>

            <div class="t-content__dates t-content__dates--reading-time ">
                <p class="m-pub-dates">
                    <span class="m-pub-dates__date">
                        Published:
                        <time datetime="2024-03-24T08:00:14+00:00">
                            23/03/2024 - 09:00
                        </time>
                    </span>
                </p>
                <div class="m-from-author">
                    <span class="m-from-author__by-label">Author: </span>
                    <a href="user.blade.php" class="m-from-author__name">{{$article->author->name}}</a>
                </div>
                <div class="a-reading-time">
                    <span class="a-svg a-svg--picto-clock" title="Temps de lecture">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="currentColor" d="M12 2c-5.522 0-10 4.478-10 10s4.478 10 10 10 10-4.478 10-10-4.478-10-10-10zm0 18c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8zm1-11h-1v5l4.25 2.548.75-1.232-3.75-2.268z" />
                        </svg>
                    </span>
                    <span id="readingTime">Calculating...</span>
                </div>
                @auth
                <form action="{{ route('articles.like', ['article' => $article->id]) }}" method="POST">
                    @csrf
                    <button id="heart-button" type="submit" style="border: none; background: none;">
                        <i id="heart-icon" class="fa fa-heart-o"></i>
                    </button>
                </form>
                <form action="{{ route('articles.bookmark', ['article' => $article->id]) }}" method="POST">
                    @csrf
                    <button type="submit" style="border: none; background: none;">
                        <i id="bookmark-icon" class='bx bxs-bookmark bx-sm'></i>
                    </button>
                </form>

                @endauth
            </div>
            <div class="t-content__main-media">
                <figure class="m-figure m-figure--16x9">
                    <img fetchpriority="high" src="{{ asset('storage/' . $article->image) }}" alt="" class="m-figure__img lazy" id="article-img">
                </figure>
            </div>
            <div class="controls">
                <div class="play-pause">
                    <button id="playButton"><i class='bx bx-play-circle bx-md'></i></button>
                </div>
                @include('delete')
            </div>
            <div class="t-content">
                <p>
                    {{$article->body}}
                </p>
            </div>




        </article>

    </div>
    <livewire:comments :model="$article" />
    <!--More acrticles-->
    <div class="container">
        <h1 class="my-4">Read More</h1>
        <div class="row justify-content-center">
            @foreach ($relatedArticles as $relatedArticle)
            <div class="col-md-4">
                <div class="text-center categorie ">
                    @switch($article->category)
                    @case('programming-web-mobile')
                    <a href="{{ route('category.show', ['category' => 'programming-web-mobile']) }}">Programming Web/Mobile</a>
                    @break
                    @case('artificial-intelligence')
                    <a href="{{ route('category.show', ['category' => 'artificial-intelligence']) }}">Artificial
                        Intelligence</a>
                    @break
                    @case('machine-learning')
                    <a href="{{ route('category.show', ['category' => 'machine-learning']) }}">Machine Learning</a>
                    @break
                    @case('cyber-security')
                    <a href="{{ route('category.show', ['category' => 'cyber-security']) }}">Cyber Security</a>
                    @break
                    @endswitch
                </div>
                <a href="{{ route('articles.show', ['article' => $relatedArticle]) }}">
                    <div class="card">

                        <img class="card-img-top img-responsive mx-auto d-block" src="{{ asset('assets/1.jpg') }}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">{{$relatedArticle->name}}</h4>
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Published: <time datetime="2024-03-24T08:00:14+00:00">23/03/2024 - 09:00</time></span></p>
                            <p class="card-text">{{$relatedArticle->description}}</p>
                        </div>
                    </div>
            </div></a>
            @endforeach

        </div>
    </div>
    <input type="hidden" id="likeStatus" value="{{ session('like_status') }}">
    <input type="hidden" id="bookmarkStatus" value="{{ session('bookmark_status') }}">

    <script src="{{asset('js/notification.js')}}"></script>
    <script src="{{asset('js/dark-mode.js')}}"></script>
    <script src="{{ asset('js/reading.time.js') }}"></script>
    <script src="{{ asset('js/tts.js') }}"></script>

</body>

</html>