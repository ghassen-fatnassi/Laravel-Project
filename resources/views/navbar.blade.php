<head>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<header>
    <a href="#" class="logo">
        <img src="" alt="logo">
        JuniorReadHub
    </a>
    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26"
                        viewBox="0 96 960 960" width="26">
                        <path
                            d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
                    </svg></a></li>
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#footer">Contact</a></li>
            @auth
            <!-- If the user is authenticated, render the user's name instead of "Sign In" -->
            <li>
                <a href="#" onclick="toggleMenu()">{{ auth()->user()->name }}</a>
            </li>
            <li>
                <a href="{{route('chatify')}}" target="_blank">Chat</a>
            </li>
            @else
            <!-- If the user is not authenticated, render the "Sign In" link -->
            <li><a href="{{route('login')}}">Sign In</a></li>
            @endauth
            <li class='important'><a href="#">Get Started</a></li>
            <li>
                <div class="btn">
                    <div class="btn__indicator">
                        <div class="btn__icon-container">
                            <i class="btn__icon fa-solid fa-sun fa-moon"></i>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li class="active hideOneMobile"><a href="{{ route('home') }}">Home</a></li>
            <li class="hideOnMobile"><a href="#footer">Contact</a></li>
            @auth
            <!-- If the user is authenticated, render the user's name instead of "Sign In" -->
            <li class="hideOnMobile">
                <a href="#" onclick="toggleMenu()">{{ auth()->user()->name }}</a>
            </li>
            <li class="hideOnMobile">
                <a href="{{route('chatify')}}" target="_blank">Chat</a>
            </li>

            @else
            <!-- If the user is not authenticated, render the "Sign In" link -->
            <li class="hideOnMobile"><a href="{{route('login')}}">Sign In</a></li>
            @endauth
            <li class='important hideOnMobile'><a href="#">Get Started</a></li>
            <li class="hideOnMobile">
                <div class="btn">
                    <div class="btn__indicator">
                        <div class="btn__icon-container">
                            <i class="btn__icon fa-solid fa-sun fa-moon"></i>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                        height="26" viewBox="0 96 960 960" width="26">
                        <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
                    </svg></a></li>
        </ul>
        @auth
        <div class="sub-menu-wrap" id="sub-menu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="{{asset('assets/avatar.png')}}" alt="">
                    <h2>{{ auth()->user()->name }}</h2>
                </div>
                <hr>
                <a href="" class="sub-menu-link">
                    <img src="{{asset('assets/profile.png')}}" alt="">
                    <p>Dashboard</p>
                    <span>></span>
                </a>
                <a href="{{ route('logout') }}" class="sub-menu-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img src="{{ asset('assets/logout.png') }}" alt="Logout">
                    <p>Logout</p>
                    <span>></span>
                </a>

                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
                </a>
            </div>
        </div>
        @endauth
    </nav>
</header>
<script>
function showSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}
</script>
<script>
let subMenu = document.getElementById("sub-menu");

function toggleMenu() {
    subMenu.classList.toggle("open-menu");
}
</script>
<script>
const get = element => document.getElementById(element);

let open = get("menu-btn");
let nav = get("nav");
let close = get("close-btn");

open.addEventListener('click', () => {
    nav.classList.add('open-nav');
})

close.addEventListener('click', () => {
    nav.classList.remove('open-nav');
})
</script>