<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
  <title>Document</title>
</head>
<body>

<!-- <nav></nav> -->

  <section id="loginregister" class="loginregister">

    <div class="row">

      <!-- Brand Box -->
      <div class="col-sm-6 brand">
        <a href="#" class="logo">JRH <span>.</span></a>

        <div class="heading">
          <h2>JunioReadHub</h2>
          <p>Your Right Choice</p>
        </div>

        <div class="success-msg">
          <p>Welcome to our community !</p>
          <a href="#" class="profile"> View Articles</a>
        </div>
      </div>

      <!-- Form Box -->
      <div class="col-sm-6 form">

        
          
        <!-- Login Form -->
        <div class="login form-peice">
          <form class="login-form" >
          <div class="form-group">
              <label for="loginEmail">Email Adderss</label>
              <input type="email" name="loginEmail" id="loginEmail" class="loginEmail">
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="loginPassword">Password</label>
                <input type="password" name="loginPassword" id="loginPassword" class="loginPassword">
                <span class="toggle-password"><i class="fas fa-eye-slash"></i></span>
              <span class="error"style="display: inline;max-width: 336px;height: 1.5vh;"></span>
            </div>

            
            <div class="CTA">
              <input type="submit" value="Login" name="login"> 
              <a href="#" class="switch" id="switch-login">I'm New</a>
            </div>
          </form>
        </div>
        <!-- End Login Form -->        
            
        <!-- Signup Form -->
        <div class="signup form-peice switched">
         <form class="signup-form" >
           <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" name="firstname" id="firstname" class="firstname" >
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" name="lastname" id="lastname" class="lastname" >
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" name="emailAdress" id="email" class="email" >
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="phone">Phone Number (Tunisia)</label>
              <input type="text" name="phone" id="phone" class="phone" >
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="pass">
              <span class="toggle-password"><i class="fas fa-eye-slash"></i></span>
              <span class="error" style="display: inline;max-width: 336px;height: 1.5vh;"></span>
            </div>

            <div class="form-group">
              <br>
              <label for="passConfirm">Confirm Password</label>
              <input type="password" name="passConfirm" id="passConfirm" class="passConfirm">
              <span class="toggle-password"><i class="fas fa-eye-slash" style="top: 74%;"></i></span>
              <span class="error"></span>
            </div>

            <div class="form-group">
                <label for="position">Select your position</label>
                <select class="position" id="position" name="position">
                    <option value="" disabled selected></option>
                    <option value="junior">Junior</option>
                    <option value="senior">Senior</option>
                    <option value="bureau">Bureau</option>
                    <option value="alumini">Alumini</option>
                </select>
                <span class="error"></span>
            </div>
            <div class="CTA">
              <input type="submit" value="Signup Now" id="submit"> 
              <a href="#" class="switch" id="switch-signup">I have an account</a>
            </div>
          </form>
        </div>
        <!-- End Signup Form -->
        
      </div>
    </div>

  </section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>