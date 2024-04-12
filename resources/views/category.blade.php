<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federo&family=Gloock&family=Manuale:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/catalogue.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    @include('navbar')
    <div class="trending-box">
        <div class="trending-title">
            <h1>Trending Articles</h1>
        </div>
        <div class="trending-articles">
            @foreach ($articleslikes as $articlel)
            <div class="t-article-box">
                <div class="t-article-pic">
                    <a href="{{ route('articles.show', ['article' => $articlel->id]) }}"><img src="{{ asset('assets/placeholder.jpg') }}" alt=""></a>
                </div>
                <div class="t-article-info">
                    <div class="t-article-title">
                        <a href="{{ route('articles.show', ['article' => $articlel->id]) }}">
                            <h4>{{$articlel->title}}</h4>
                        </a>
                    </div>
                    <div class="t-article-authorbutton">
                        <a href="{{ route('user.show', ['user' => $articlel->author_id]) }}">
                            <div class="t-article-author">
                                <p>{{$articlel->author->name}}</p>
                            </div>
                        </a>
                        <button class="read-button"><a href="">Read</a></button>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
    <div class="discover-title">
        @if($category=='programming-web-mobile')
        <h1>Discover Programming Articles</h1>
        @elseif($category=='artificial-intelligence')
        <h1>Discover Artificial Intelligence Articles</h1>
        @elseif($category=='machine-learning')
        <h1>Discover Machine Learning Articles</h1>
        @elseif($category=='cyber-security')
        <h1>Discover Cyber Security Articles</h1>
        @endif
    </div>
    <div class="all-articles">
        @include('data')
    </div>
    
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.1/dist/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.trending-articles').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                arrows: false,
                autoplaySpeed: 2000,
                dots: true,
                responsive: [{
                        breakpoint: 1080,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]

            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{asset('js/dark-mode.js')}}"></script>

</body>

</html>