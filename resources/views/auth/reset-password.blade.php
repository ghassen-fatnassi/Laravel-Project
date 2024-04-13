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

 
            <!-- Reset Password Form -->
            <div class="reset_password form-peice">
                <form class="reset_password-form" method="POST" action="{{ route('password.store') }}">
                @csrf
                    
                    <!-- Password Reset Token -->
                     <input type="hidden" name="token" value="{{ $request->route('token') }}">


                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email Address')" />
                        <x-text-input type="text" id="email" class="email" name="email" :value="old('email', $request->email)"  autocomplete="username"/>
                        <span class="error"></span>
                    </div>


                    <div class="form-group">
                    <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="password" autocomplete="new-password">
                        <span class="toggle-password"><i class="fas fa-eye-slash"></i></span>
                        <span class="error" style="display: inline;max-width: 336px;height: 1.5vh;"></span>
                        <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->
                    </div>

                    <div class="form-group">
                        <br>
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="password_confirmation" autocomplete="new-password">
                        <span class="toggle-password"><i class="fas fa-eye-slash" style="top: 74%;"></i></span>
                        <span class="error"></span>
                        <!-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> -->
                    </div>


                    <div class="CTA">
                        <input type="submit" value="Reset Password" > 
                    </div>
                    <br>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:#f95959;position: absolute;margin-top: 2vh;" />
                </form>
            </div>
            <!-- End Signup Form -->

        
        </div>
    </div>


</section>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>
<script src="{{ asset('js/dark-mode.js') }}"></script>

</body>
</html>


