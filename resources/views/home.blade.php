<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('navbar')
    <section class="hero-section">
        <div class="animated-title">
            <div class="text-top">
                <div>
                    <span>OUR BELOVED</span>
                    <span>JUNIOR MEMBERS</span>
                </div>
            </div>
            <div class="text-bottom">
                <div>STAY CURIOUS!</div>
            </div>
        </div>
        <div class="card-grid">
            <a class="card" href="{{ route('category.show', ['category' => 'programming-web-mobile']) }}">
                <div class="card__background"
                    style="background-image: url(https://f.hellowork.com/blogdumoderateur/2020/11/Developpeur-Mobile.jpg)">
                </div>
                <div class="card__content">
                    <p class="card__category">Category</p>
                    <h3 class="card__heading">Programming Web/Mobile</h3>
                </div>
            </a>
            <a class="card" href="{{ route('category.show', ['category' => 'artificial-intelligence']) }}">
                <div class="card__background"
                    style="background-image: url(https://theicttrends.com/wp-content/uploads/2020/12/businessman-hand-touching-virtual-screen-artificial-intelligence-technology-icon-over-the-network_t20_WxYbbL.jpg)">
                </div>
                <div class="card__content">
                    <p class="card__category">Category</p>
                    <h3 class="card__heading">Artificial Intelligence</h3>
                </div>
            </a>
            <a class="card" href="{{ route('category.show', ['category' => 'cyber-security']) }}">
                <div class="card__background"
                    style="background-image: url(https://miro.medium.com/max/1400/1*P72CQFHLCAgX_V3zMM-Epg.png)"></div>
                <div class="card__content">
                    <p class="card__category">Category</p>
                    <h3 class="card__heading">Cyber Security</h3>
                </div>
            </a>
            <a class="card" href="{{ route('category.show', ['category' => 'machine-learning']) }}">
                <div class="card__background"
                    style="background-image: url(http://www.sphinx-solution.com/blog/wp-content/uploads/2016/08/machine-learning.jpg)">
                </div>
                <div class="card__content">
                    <p class="card__category">Category</p>
                    <h3 class="card__heading">Machine Learning</h3>
                </div>
            </a>
        </div>
    </section>
    @include('footer')
    <script src="{{asset('js/dark-mode.js')}}"></script>
</body>

</html>