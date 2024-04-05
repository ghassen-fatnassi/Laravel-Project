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

        <!-- Form Box -->
        <div class="col-sm-6 form">
            <!-- Login Form -->
            <div class="login form-peice">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="loginEmail">Email Address</label>
                        <input type="email" name="email" id="loginEmail" class="loginEmail" value="{{ old('email') }}" required autofocus>
                        <span class="error"></span>
                    </div>

                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" name="password" id="loginPassword" class="loginPassword" required>
                        <span class="toggle-password"><i class="fas fa-eye-slash"></i></span>
                        <span class="error" style="display: inline;max-width: 336px;height: 1.5vh;"></span>
                    </div>

                    <div class="CTA">
                        <input type="submit" value="Login" name="login">
                        <a href="{{ route('register') }}" class="switch" id="switch-login">I'm New</a>
                    </div>
                </form>
            </div>
            <!-- End Login Form -->

           
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>
