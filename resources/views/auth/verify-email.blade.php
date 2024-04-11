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
                <p>Proceeding to email verification ...</p>
                <br>
                <p>Only one step left to be among our community!</p>


                <!-- <a href="#" class="profile"> View Articles</a> -->
                </div>
            </div>

        <!-- Form Box -->
        <div class="col-sm-6 form">

    
            <!-- verification Form -->
            <div class="verification form-peice">

            <p style="margin-left: 28vh;margin-top:12vh;color: black;">
                {{ __('Thank you for signing up ! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </p>


            <div>
                <form class="verification-form" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                        <div class="CTA">
                            <input type="submit" value="Resend Verification Email'" name="verification resend"> 
                        </div>

                </form>

                <form class="logout-form" style="margin-left:30vh;" method="POST" action="{{ route('logout') }}">
                    @csrf
                        <div class="CTA">
                            <input type="submit" value="Log Out" name="logout"> 
                        </div>

                </form>
            </div>


                <br><br>
                <!-- Session Status -->
                @if (session('status') == 'verification-link-sent')
                    <div style="color:#11b511;margin-left: 26vh;margin-top:10vh" class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif




            
            </div>
        </div>

    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>


