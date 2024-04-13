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
@include('navbar')

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
                <p>Proceeding to email verification ...</p>
                <br>
                <p>Only one step left to be among our community!</p>


                <!-- <a href="#" class="profile"> View Articles</a> -->
                </div>
            </div>

        <!-- Form Box -->
        <div class="col-sm-6 form">

    
            <!-- Login Form -->
            <div class="login form-peice">


            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group"> 

                    <label for="loginEmail">Email Adderss</label>
                        <input id="email" class="loginEmail" type="email" name="email" :value="old('email')"  autofocus autocomplete="username">
                        <span class="error"></span>
                        
                    </div>

                    <div class="form-group">
                    <label for="loginPassword">Password</label>
                        <input id="password" class="loginPassword" type="password" name="password" autocomplete="current-password" >
                        <span class="toggle-password"><i class="fas fa-eye-slash"></i></span>
                        <span class="error"style="display: inline;max-width: 336px;height: 1.5vh;"></span>
                        
                    </div>

                    <div class="block mt-4"style="margin-top: 4vh;margin-block-end: -2vh;">
                        <!-- <label for="remember_me" class="flex items-center"> -->
                        <input type="checkbox" id="remember_me" name="remember" style="position:relative;margin-left: 1rem;top:1.2rem;">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400" style="color: #b89072;">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="form-group">
                        @if (Route::has('password.request'))
                            <a  href="{{ route('password.request') }}" style="color: #66503e; margin-left: 45vh;">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <div class="CTA">
                            <input type="submit" value="Login" name="login"> 
                            <a href="{{ route('register') }}" class="switchbutton" id="switch-login">I'm New</a>
                        </div>

                    </div>
                    <br><br>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:#f95959;" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color:#f95959;"/>

                </form>
            
            </div>
        </div>

    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>
<script src="{{asset('js/dark-mode.js')}}"></script>
</body>
</html>
