<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$article->title}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Federo&family=Gloock&family=Manuale:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
                <a href="{{ route('category.show', ['category' => 'programming-web-mobile']) }}"
                    class="a-tag__wrapper">Programming web/mobile</a>
                @break
                @case('artificial-intelligence')
                <a href="{{ route('category.show', ['category' => 'artificial-intelligence']) }}"
                    class="a-tag__wrapper">Artificial Intelligence</a>
                @break
                @case('machine-learning')
                <a href="{{ route('category.show', ['category' => 'machine-learning']) }}"
                    class="a-tag__wrapper">Machine Learning</a>
                @break
                @case('cyber-security')
                <a href="{{ route('category.show', ['category' => 'cyber-security']) }}" class="a-tag__wrapper">Cyber
                    Security</a>
                @break
                @endswitch
            </div>
            <h1 class="t-content__title a-page-title">How artificial intelligence is transforming the world</h1>
            <p class="t-content__chapo">Resumé de l'article
                Artificial intelligence (AI) is a wide-ranging tool that enables people to rethink how we integrate
                information, analyze data, and use the resulting insights to improve decision making—and already it is
                transforming every walk of life. In this report, Darrell West and John Allen discuss AI’s application
                across a variety of sectors, address issues in its development, and offer recommendations for getting
                the most out of AI while still protecting important human values.
            </p>
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
                    <a href="user.blade.php" class="m-from-author__name">Ghassen Fatnassi</a>
                </div>
                <div class="a-reading-time">
                    <span class="a-svg a-svg--picto-clock" title="Temps de lecture"> <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="currentColor"
                                d="M12 2c-5.522 0-10 4.478-10 10s4.478 10 10 10 10-4.478 10-10-4.478-10-10-10zm0 18c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8zm1-11h-1v5l4.25 2.548.75-1.232-3.75-2.268z" />
                        </svg>
                    </span> 2 mn
                </div>
                <div class="anchors-container">
                    <div class="save-article-wrapper">
                        <button type="button" class="cvMh7UGw">
                            <svg class="saved-article_svg__fs-icon saved-article_svg__fs-icon--saved-article"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="25" height="25">
                                <path d="M13.9 3c.7 0 1.3.6 1.3 1.3V17L10 13.9 4.8 17V4.3c0-.7.5-1.3 1.3-1.3h7.8z">
                                </path>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
            <div class="t-content__main-media">
                <figure class="m-figure m-figure--16x9">
                    <img fetchpriority="high" src="{{ asset('storage/' . $article->image) }}" alt=""
                        class="m-figure__img lazy" id="article-img">
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
                    There’s been a lot of scary talk going around lately. Artificial intelligence is getting more
                    powerful — especially the new generative AI that can write code, write stories, and generate outputs
                    ranging from pretty pictures to product designs. The greatest concern is not so much that computers
                    will become smarter than humans, it’s that they will be unpredictably smart, or unpredictably
                    foolish, due to quirks in the AI's code. Experts worry that if we keep entrusting key tasks to them,
                    they could trigger what Elon Musk has called “civilization destruction.”

                    This worst-case scenario needs to be addressed but will not happen soon. If you own or manage a
                    midsize company, the pressing issue is how new developments in AI will affect your business. Our
                    view, which reflects a consensus view, says to handle this change in the environment the way any big
                    change should be handled. Don’t ignore it, or try to resist it, or get stuck on what it might do to
                    you. Instead, look at what you can do with the change. Embrace it. Leverage it to your advantage.

                    Here’s a brief overview that should make clear a couple of key points. Although the recent surge in
                    AI may seem like it came out of the blue, it’s really just the next step in a long process of
                    evolutionary change. Not only can midsize companies participate in the evolution, they will have to
                    in order to stay fit to survive.

                    How we got here … and where we can go next

                    Artificial intelligence—the creation of software and hardware able to simulate human smarts—isn’t
                    new. Crucial core technologies for today’s AI were first conceived in the 1970s and ‘80s. In the
                    1990s, IBM’s Deep Blue chess machine played and beat the reigning world champion, setting a
                    milestone for AI researchers. Since then, AI has continued to improve while moving into new realms,
                    some of which we now take for granted. By the 2010s, natural language processing was refined to the
                    point where Siri and Alexa could be your virtual assistants.

                    What’s new lately is that major tech-industry players have been ramping up investment at the
                    frontiers of AI. Elon Musk is a leader in the field despite his reservations. He has launched a
                    deep-pocketed startup, X.ai, to focus solely on cutting-edge AI. Microsoft is the lead investor in
                    OpenAI. Amazon, Google/Alphabet, and others are placing big bets in the race as well.
                </p>
            </div>




        </article>
        <<<<<<< HEAD=======>>>>>>> f624fc138d2313d9465e14eb2fe1ac32eba927e4

    </div>
    <livewire:comments :model="$article" />
    <!--comments section-->
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="d-flex flex-column comment-section">
                    <div class="bg-white p-2">
                        <div class="d-flex flex-row user-info"><img class="rounded-circle"
                                src="{{ asset('assets/comment.jpg') }}" width="40">
                            <div class=" name-date d-flex flex-column justify-content-start ml-2 "><span
                                    class="d-block font-weight-bold name">Amal Jaoua</span><span
                                    class="date text-black-50">24 Mars 2024</span></div>
                        </div>
                        <div class="mt-2">
                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <!-- Reply Section -->
                        <div class="bg-light p-2">
                            <div class="reply-section mt-2">
                                <div class="d-flex flex-row align-items-start">
                                    <img class="rounded-circle" src="{{ asset('assets/comment.jpg') }}" width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                                </div>
                                <div class=" interaction1 mt-2 text-center">
                                    <button class="b-a btn  btn-primary  shadow-none reply-btn"
                                        type="button">Reply</button>
                                    <button class="b-a btn btn-outline-primary  ml-1 shadow-none cancel-reply-btn"
                                        type="button"><span class="cancel">Cancel</span></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bg-white">
                        <div class="interaction d-flex flex-row fs-12 ">
                            <div class="like p-2 cursor" onclick="toggleHeart()"><i id="heart-icon"
                                    class="fa fa-heart-o"></i><span class="ml-1">Like</span></div>
                            <div class="like reply p-2 cursor"><i class="fa fa-commenting-o"></i><span
                                    class="ml-1">Reply</span></div>
                        </div>
                    </div>
                    <div class="bg-light p-2">
                        <div class="d-flex flex-row align-items-start">
                            <img class="rounded-circle" src="{{ asset('assets/comment.jpg') }}" width="40">
                            <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                        </div>
                        <div class="interaction1 mt-2 text-center">
                            <button class="b-a btn btn-primary shadow-none" type="button">Comment</button>
                            <button class="b-a btn btn-outline-primary  ml-1 shadow-none " type="button"><span
                                    class="cancel">Cancel</span></button>
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
            @foreach ($relatedArticles as $relatedArticle)
            <div class="col-md-4">
                <div class="text-center categorie ">
                    @switch($article->category)
                    @case('programming-web-mobile')
                    <a href="{{ route('category.show', ['category' => 'programming-web-mobile']) }}">Programming
                        Web/Mobile</a>
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

                        <img class="card-img-top img-responsive mx-auto d-block" src="{{ asset('assets/1.jpg') }}"
                            alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">{{$relatedArticle->name}}</h4>
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Published: <time
                                        datetime="2024-03-24T08:00:14+00:00">23/03/2024 - 09:00</time></span></p>
                            <p class="card-text">{{$relatedArticle->description}}</p>
                        </div>
                    </div>
            </div></a>
            @endforeach

        </div>
        <script src="{{asset('js/dark-mode.js')}}"></script>
        <script src="{{ asset('js/singlearticle.js') }}"></script>
</body>

</html>