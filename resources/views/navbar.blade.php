<header>
  <a href="#" class="logo">
    <img src="" alt="logo">
    Junior Exchange
  </a>
  <nav>
    <ul class="sidebar">
      <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
            <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
          </svg></a></li>
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Contact</a></li>
      @auth
      <!-- If the user is authenticated, render the user's name instead of "Sign In" -->
      <li>
        <a href="#" onclick="toggleMenu()">{{ auth()->user()->name }}</a>
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
      <li class="active hideOneMobile"><a href="">Home</a></li>
      <li class="hideOnMobile"><a href="#">Contact</a></li>
      @auth
      <!-- If the user is authenticated, render the user's name instead of "Sign In" -->
      <li class="hideOnMobile">
        <a href="#" onclick="toggleMenu()">{{ auth()->user()->name }}</a>
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
      <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
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
        <a href="" class="sub-menu-link">
          <img src="{{asset('assets/logout.png')}}" alt="">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
              <p>Logout</p>
            </a>
          </form>
          <span>></span>
        </a>
      </div>
    </div>
    @endauth
  </nav>
</header>
<script>
  let subMenu = document.getElementById("sub-menu");

  function toggleMenu() {
    subMenu.classList.toggle("open-menu");
  }
</script>