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
                <h2>JuniorReadHub</h2>
                <p>Your Right Choice</p>
                </div>

                <div class="success-msg">
                <p>Welcome to our community !</p>
                <a href="#" class="profile"> View Articles</a>
                </div>
            </div>

        <!-- Form Box -->
        <div class="col-sm-6 form">

    
            <!-- forgot_password Form -->
            <div class="forgot_password form-peice">

            <p style="margin-left: 27vh;margin-top:4vh;color: black;">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>



                <form class="forgot_password-form" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group"> 

                    <label for="email">Email Adderss</label>
                        <input id="email" class="email" type="email" name="email" :value="old('email')"  autofocus >
                        <span class="error"></span>
                        
                    </div>

  
                        <div class="CTA">
                            <input type="submit" value="Email Password Reset Link" name="forgot_password"> 
                        </div>

                    <br><br>
                    <!-- Session Status -->
                    <x-auth-session-status style="color:#11b511" class="mb-4" :status="session('status')" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:#f95959;" />


                </form>
            
            </div>
        </div>

    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>






