<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(https://f.hellowork.com/blogdumoderateur/2020/11/Developpeur-Mobile.jpg)"></div>
        <div class="card__content">
          <p class="card__category">Category</p>
          <h3 class="card__heading">Programming Web/Mobile</h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(https://theicttrends.com/wp-content/uploads/2020/12/businessman-hand-touching-virtual-screen-artificial-intelligence-technology-icon-over-the-network_t20_WxYbbL.jpg)"></div>
        <div class="card__content">
          <p class="card__category">Category</p>
          <h3 class="card__heading">Artificial Intelligence</h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(https://miro.medium.com/max/1400/1*P72CQFHLCAgX_V3zMM-Epg.png)"></div>
        <div class="card__content">
          <p class="card__category">Category</p>
          <h3 class="card__heading">Cyber Security</h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(http://www.sphinx-solution.com/blog/wp-content/uploads/2016/08/machine-learning.jpg)"></div>
        <div class="card__content">
          <p class="card__category">Category</p>
          <h3 class="card__heading">Machine Learning</h3>
        </div>
      </a>
    </div>
  </section>
  <section id="footer">
    <div class="containerr">
      <div class="contentt">  
        <div class="left-side">
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">Cité Technologique des Communications Rte de Raoued Km 3,5 - 2083, Ariana Tunisie</div> 
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone Number</div>
                <div class="text-one">+216 22 222 222 </div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>              
              <div class="text-one">junior.entreprise@supcom.tn</div>
            </div>
        </div>
        <div class="right-side">               
            <p class="par11"> <strong>Privacy Policy</strong></p>
            <p class="par11">Your privacy is a priority for us. Discover how we handle your information responsibly by reviewing our Privacy Policy. We are committed to transparency and safeguarding your data throughout your interaction with our services.</p>                            
            <div class="topic-text">Join Our Newsletter Now </div>
            <p class="par11">Enjoy our newsletter to stay updated with the latest news and special sales. Lets your email address here!</p>             
            <form action="#" >  
              <div class="input-box">
                  <input type="text" placeholder="Enter your email">
              </div>                
              <div class="button">
                  <input type="button" value="Send Now">
              </div>
            </form>
        </div>
      </div>
    </div>
    <div class="last">
      <div class="social"><a href="https://www.instagram.com/junior_supcom/"><i class="fa-brands fa-instagram"></i></a><a href="https://www.linkedin.com/company/supcomjuniorentreprise/?trk=public_profile_experience-item_profile-section-card_subtitle-click&originalSubdomain=fr"><i class="fa-brands fa-linkedin"></i></a><a href="https://www.facebook.com/SupComJuniorEntrepriseSJE"><i class="fa-brands fa-facebook"></i></a></div>
        <p class="copyright">SupcomJuniorEntreprise© 2024</p>
    </div>
  </section>
  <script>
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
  </script>  
  <script src="{{asset('js/home.js')}}"></script>
  <script src="{{asset('js/dark-mode.js')}}"></script>
</body>
</html>