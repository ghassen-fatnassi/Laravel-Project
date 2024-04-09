<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federo&family=Gloock&family=Manuale:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="{{asset('css/catalogue.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <h1>this is the catalogue page</h1>
    <button onclick="toggleDarkMode()">Toggle Dark Mode</button>
    <div class="trending-box">
        <div class="trending-title">
            <h1>Trending Articles</h1>
        </div>
        <div class="trending-articles">
            <div class="t-article-box">
                <div class="t-article-pic">
                    <a href=""><img src="{{ asset('assets/placeholder.jpg') }}" alt=""></a>
                </div>
                <div class="t-article-info">
                    <div class="t-article-title">
                        <a href=""><h4>The Brain Science Behind Aging and Forgetting</h4></a>
                    </div>
                    <div class="t-article-authorbutton">
                        <div class="t-article-author">
                            <p>Kathleen Murphy</p>
                        </div>
                        <button class="read-button"><a href="">Read</a></button>
                    </div>
                </div>
            </div>
            <div class="t-article-box">
                <div class="t-article-pic">
                    <a href=""><img src="{{ asset('assets/placeholder.jpg') }}" alt=""></a>
                </div>
                <div class="t-article-info">
                    <div class="t-article-title">
                        <a href=""><h4>My Friend Won the US$100,000 Debate on the Origin of COVID-19</h4></a>
                    </div>
                    <div class="t-article-authorbutton">
                        <div class="t-article-author">
                            <p>Shin Jie Yong</p>
                        </div>
                        <button class="read-button"><a href="">Read</a></button>
                    </div>
                </div>
            </div>
            <div class="t-article-box">
                <div class="t-article-pic">
                    <a href=""><img src="{{ asset('assets/placeholder.jpg') }}" alt=""></a>
                </div>
                <div class="t-article-info">
                    <div class="t-article-title">
                        <a href=""><h4>Marking the Webs 35th Birthday: An Open Letter</h4></a>
                    </div>
                    <div class="t-article-authorbutton">
                        <div class="t-article-author">
                            <p>Tim Berners-Lee</p>
                        </div>
                        <button class="read-button"><a href="">Read</a></button>
                    </div>
                </div>
            </div>
            <div class="t-article-box">
                <div class="t-article-pic">
                    <a href=""><img src="{{ asset('assets/placeholder.jpg') }}" alt=""></a>
                </div>
                <div class="t-article-info">
                    <div class="t-article-title">
                        <a href=""><h4>The Future of Poetry</h4></a>
                    </div>
                    <div class="t-article-authorbutton">
                        <div class="t-article-author">
                            <p>Sierra Elman</p>
                        </div>
                        <button class="read-button"><a href="">Read</a></button>
                    </div>
                </div>
            </div>
            <div class="t-article-box">
                <div class="t-article-pic">
                    <a href=""><img src="{{ asset('assets/placeholder.jpg') }}" alt=""></a>
                </div>
                <div class="t-article-info">
                    <div class="t-article-title">
                        <a href=""><h4>The Infinite Shades of Saudade Blue</h4></a>
                    </div>
                    <div class="t-article-authorbutton">
                        <div class="t-article-author">
                            <p>Maria Garcia</p>
                        </div>
                        <button class="read-button"><a href="">Read</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="discover-title">
            <h1>Discover Programming Articles</h1>
    </div>
    <div class="all-articles">    
        <div class="article-container">
            <div class="article-category-date">
                <a href="">Programming</a>
                <span class="date">24 March 2024</span>
                <span class="duration">5 min read</span>
            </div>
            <div class="article-info">
                <div class="article-text">
                    <div class="article-title">
                        <a href="">
                            <h2>The Brain Science Behind Aging and Forgetting</h2>
                        </a>
                    </div>
                    <div class="article-subtext">
                    A New Yorker filed a $15 million dollar lawsuit against Burger King, claiming a NYC store allowed a drug den. Locals say it's not just there.
                    </div>
                    <div class="article-author-avatar">
                        <div class="article-author">Tim Berners-Lee</div>
                        <div class="article-avatar">
                            <img src="{{ asset('assets/avatar.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="article-img" data-aos="fade-down">
                    <a href=""><img src="{{ asset('assets/burgerking.webp') }}" alt=""></a>
                </div>

            </div>
        </div>
        <div class="article-container">
            <div class="article-category-date">
                <a href="">Programming</a>
                <span class="date">24 March 2024</span>
                <span class="duration">4 min read</span>
            </div>
            <div class="article-info">
                <div class="article-text">
                    <div class="article-title">
                        <a href="">
                            <h2>Marking the Webs 35th Birthday: An Open Letter</h2>
                        </a>
                    </div>
                    <div class="article-subtext">
                    Sir Tim Berners-Lees open letter to mark the occasion of the Webs 35th Birthday.
                    </div>
                    <div class="article-author-avatar">
                        <div class="article-author">Tim Berners-Lee</div>
                        <div class="article-avatar">
                            <img src="{{ asset('assets/avatar.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="article-img" data-aos="fade-down">
                    <a href=""><img src="{{ asset('assets/article2.webp') }}" alt=""></a>
                </div>

            </div>
        </div>
        <a href="" class="view-more">VIEW MORE</a>  
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.1/dist/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.trending-articles').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [
                {
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