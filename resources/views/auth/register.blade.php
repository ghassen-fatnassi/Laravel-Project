<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Login</title>
</head>
<body>

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
        <!-- Signup Form -->
        <div class="signup form-peice switched">
        <form method="POST" action="{{ route('register') }}">
            @csrf
           <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="name" >
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" name="email" id="email" class="email" >
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
              <input type="password" name="password_confirmation" id="passConfirm" class="passConfirm">
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
              <button type="submit">
                Signup Now
              </button>
              <a href="{{ route('login') }}" class="switch" id="switch-signup">I have an account</a>
            </div>
          </form>
        </div>
        <!-- End Signup Form -->
        
      </div>
    </div>

  </section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
</html>