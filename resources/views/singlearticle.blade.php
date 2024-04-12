<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Article </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federo&family=Gloock&family=Manuale:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/singlearticle.css') }}">

</head>

<body>
    @include('navbar')
    <div class=" container">
        <article class="t-content__article-wrapper" data-article-content="">
            <div class="t-content__section a-tag">
                <a href="#" class="a-tag__wrapper">{{$article->category}}</a>
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
                <div class="like like-c p-2 cursor" data-article-id="{{ $article->id }}" onclick="toggleHeart()"><i id="heart-icon" class="fa fa-heart-o"></i></div>
                <div class="anchors-container">
                    <div class="save-article-wrapper">
                        <button type="button" class="cvMh7UGw " data-article-id="{{ $article->id }}"id="bookmark-button" onclick="bookmarkArticle()">
                            <svg class="saved-article_svg__fs-icon saved-article_svg__fs-icon--saved-article" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="25" height="25">
                                <path d="M13.9 3c.7 0 1.3.6 1.3 1.3V17L10 13.9 4.8 17V4.3c0-.7.5-1.3 1.3-1.3h7.8z"></path>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
            <div class="t-content__main-media">
                <figure class="m-figure m-figure--16x9">
                    <img fetchpriority="high" src="{{asset('assets/article-img.webp') }}" alt="" class="m-figure__img lazy">
                </figure>
            </div>
            <div class="controls">
                <button id="playButton">Play</button>
                <button id="pauseButton">Pause</button>
            </div>
            <div class="t-content">
                <p>
                    {{$article->body}}
                </p>
            </div>
        </article>
        @include('delete')

    </div>
    <!--comments section-->
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="d-flex flex-column comment-section">
                    <div class="bg-white p-2">
                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="{{ asset('assets/comment.jpg') }}" width="40">
                            <div class=" name-date d-flex flex-column justify-content-start ml-2 "><span class="d-block font-weight-bold name">Amal Jaoua</span><span class="date text-black-50">24 Mars 2024</span></div>
                        </div>
                        <div class="mt-2">
                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <!-- Reply Section -->
                        <div class="bg-light p-2">
                            <div class="reply-section mt-2">
                                <div class="d-flex flex-row align-items-start">
                                    <img class="rounded-circle" src="{{ asset('assets/comment.jpg') }}" width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                                </div>
                                <div class=" interaction1 mt-2 text-center">
                                    <button class="b-a btn  btn-primary  shadow-none reply-btn" type="button">Reply</button>
                                    <button class="b-a btn btn-outline-primary  ml-1 shadow-none cancel-reply-btn" type="button"><span class="cancel">Cancel</span></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bg-white">
                        <div class="interaction d-flex flex-row fs-12 ">
                            <div class="like p-2 cursor" onclick="toggleHeart()"><i id="heart-icon" class="fa fa-heart-o"></i><span class="ml-1">Like</span></div>
                            <div class="like reply p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Reply</span></div>
                        </div>
                    </div>
                    <div class="bg-light p-2">
                        <div class="d-flex flex-row align-items-start">
                            <img class="rounded-circle" src="{{ asset('assets/comment.jpg') }}" width="40">
                            <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                        </div>
                        <div class="interaction1 mt-2 text-center">
                            <button class="b-a btn btn-primary shadow-none" type="button">Comment</button>
                            <button class="b-a btn btn-outline-primary  ml-1 shadow-none " type="button"><span class="cancel">Cancel</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--More acrticles-->

    <div class="container">
        <h1 class="my-4">Read More</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="text-center categorie ">
                    <a href="#">Catégorie 1</a>
                </div>
                <a href="">
                    <div class="card">

                        <img class="card-img-top img-responsive mx-auto d-block" src="{{ asset('assets/1.jpg') }}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">Title 1</h4>
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Published: <time datetime="2024-03-24T08:00:14+00:00">23/03/2024 - 09:00</time></span></p>
                            <p class="card-text">Resumé de l'article Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error
                                quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure
                                perspiciatis mollitia recusandae vero vel quam!</p>
                        </div>
                    </div>
            </div></a>
            <div class="col-md-4">
                <div class="text-center categorie">
                    <a href="#">Catégorie 2</a>
                </div>
                <a href="">
                    <div class="card">

                        <img class="card-img-top img-responsive mx-auto d-block" src="{{ asset('assets/2.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">Title 2</h4>
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Published: <time datetime="2024-03-24T08:00:14+00:00">23/03/2024 - 09:00</time></span></p>
                            <p class="card-text"> resumé de l'article Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error
                                quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure
                                perspiciatis mollitia recusandae vero vel quam!</p>
                        </div>
                    </div>
            </div></a>
            <div class="col-md-4">
                <div class="text-center categorie">
                    <a href="#">Catégorie 3</a>
                </div>
                <a href="">
                    <div class="card">

                        <img class="card-img-top img-responsive mx-auto d-block" src="{{ asset('assets/3.jpg') }}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">Title 3</h4>
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Published: <time datetime="2024-03-24T08:00:14+00:00">23/03/2024 - 09:00</time></span></p>
                            <p class="card-text card__snippet">Resumé de l'article Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error
                                quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure
                                perspiciatis mollitia recusandae vero vel quam!</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <script src="{{asset('js/dark-mode.js')}}"></script>
        <script src="{{ asset('js/singlearticle.js') }}"></script>
        <script src="{{ asset('js/reading.time.js') }}"></script>
        <script src="{{ asset('js/tts.js') }}"></script>
</body>

</html>