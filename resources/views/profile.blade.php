<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="d-flex flex-column col-md-12">
            <div id="content" class="content content-full-width">

                <div class="profile-header rounded shadowbig">
                    <!-- BEGIN profile-header-cover -->
                    <div class="profile-header-cover"></div>
                    <!-- END profile-header-cover -->
                    <!-- BEGIN profile-header-content -->
                    <div class="profile-header-content">
                        <!-- BEGIN profile-header-img -->
                        <div class="profile-header-img">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                        </div>
                        <!-- END profile-header-img -->
                        <!-- BEGIN profile-header-info -->
                        <div class="profile-header-info">
                            <h4 class="mt-10 mb-3">Sean Ngu</h4>
                            <p class="mb-10">UXUI + Frontend Developer</p>
                            <p class="mb-10">UXUI + Frontend Developer</p>
                        </div>
                        <!-- END profile-header-info -->
                    </div>
                    <!-- END profile-header-content -->
                    <!-- BEGIN profile-header-tab -->
                    <ul class="profile-header-tab nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_ active" id="fill-tab-0" data-bs-toggle="tab" href="#fill-tabpanel-0"
                                role="tab" aria-controls="fill-tabpanel-0" aria-selected="true">
                                Personal
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1" role="tab"
                                aria-controls="fill-tabpanel-1" aria-selected="false">
                                Personal
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_" id="fill-tab-2" data-bs-toggle="tab" href="#fill-tabpanel-2" role="tab"
                                aria-controls="fill-tabpanel-2" aria-selected="false">
                                Personal
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3" role="tab"
                                aria-controls="fill-tabpanel-3" aria-selected="false">
                                Personal
                            </a>
                        </li>
                    </ul>
                    <!-- END profile-header-tab -->
                </div>
                <!-- end profile -->
                <div class="pb-3"></div>
                <!-- begin profile-content -->
                <div class="rounded shadowbig boxbig">
                    <div class="tab-content pt-5 rounded" id="tab-content">
                        <div class="tab-pane active profile-header-tab" id="fill-tabpanel-0" role="tabpanel"
                            aria-labelledby="fill-tab-0">
                            <form class="file-upload">
                                <div class="row mb-5 gx-5">
                                    <!-- Contact detail -->
                                    <div class="col-xxl-8 mb-5 mb-xxl-0">
                                        <div class="bg-secondary-soft px-4 py-5 rounded">
                                            <div class="row g-3">
                                                <h4 class="mb-4 mt-0">Contact detail</h4>
                                                <!-- First Name -->
                                                <div class="col-md-6">
                                                    <label class="form-label">First Name *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="First name" value="Scaralet">
                                                </div>
                                                <!-- Last name -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Last Name *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Last name" value="Doe">
                                                </div>
                                                <!-- Phone number -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Phone number *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Phone number" value="(333) 000 555">
                                                </div>
                                                <!-- Mobile number -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Mobile number *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Phone number" value="+91 9852 8855 252">
                                                </div>
                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Email *</label>
                                                    <input type="email" class="form-control" id="inputEmail4"
                                                        value="example@homerealty.com">
                                                </div>
                                                <!-- Skype -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Skype *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Phone number" value="Scaralet D">
                                                </div>
                                            </div> <!-- Row END -->
                                        </div>
                                    </div>
                                    <!-- Upload profile -->
                                    <div class="col-xxl-4">
                                        <div class="bg-secondary-soft px-4 py-5 rounded">
                                            <div class="row g-3">
                                                <h4 class="mb-4 mt-0">Upload your profile photo</h4>
                                                <div class="text-center">
                                                    <!-- Image upload -->
                                                    <div class="square position-relative display-2 mb-3">
                                                        <i
                                                            class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>
                                                    </div>
                                                    <!-- Button -->
                                                    <input type="file" id="customFile" name="file" hidden="">
                                                    <label class="btn btn-success-soft btn-block"
                                                        for="customFile">Upload</label>
                                                    <button type="button" class="btn btn-danger-soft">Remove</button>
                                                    <!-- Content -->
                                                    <p class="text-muted mt-3 mb-0"><span
                                                            class="me-1">Note:</span>Minimum size 300px x 300px</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Row END -->

                                <!-- Social media detail -->
                                <div class="row mb-5 gx-5">
                                    <div class="col-xxl-6 mb-5 mb-xxl-0">
                                        <div class="bg-secondary-soft px-4 py-5 rounded">
                                            <div class="row g-3">
                                                <h4 class="mb-4 mt-0">Social media detail</h4>
                                                <!-- Facebook -->
                                                <div class="col-md-6">
                                                    <label class="form-label"><i
                                                            class="fab fa-fw fa-facebook me-2 text-facebook"></i>Facebook
                                                        *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Facebook" value="http://www.facebook.com">
                                                </div>
                                                <!-- Twitter -->
                                                <div class="col-md-6">
                                                    <label class="form-label"><i
                                                            class="fab fa-fw fa-twitter text-twitter me-2"></i>Twitter
                                                        *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Twitter" value="http://www.twitter.com">
                                                </div>
                                                <!-- Linkedin -->
                                                <div class="col-md-6">
                                                    <label class="form-label"><i
                                                            class="fab fa-fw fa-linkedin-in text-linkedin me-2"></i>Linkedin
                                                        *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Linkedin" value="http://www.linkedin.com">
                                                </div>
                                                <!-- Instragram -->
                                                <div class="col-md-6">
                                                    <label class="form-label"><i
                                                            class="fab fa-fw fa-instagram text-instagram me-2"></i>Instagram
                                                        *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Instragram" value="http://www.instragram.com">
                                                </div>
                                                <!-- Dribble -->
                                                <div class="col-md-6">
                                                    <label class="form-label"><i
                                                            class="fas fa-fw fa-basketball-ball text-dribbble me-2"></i>Dribble
                                                        *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Dribble" value="http://www.dribble.com">
                                                </div>
                                                <!-- Pinterest -->
                                                <div class="col-md-6">
                                                    <label class="form-label"><i
                                                            class="fab fa-fw fa-pinterest text-pinterest"></i>Pinterest
                                                        *</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Pinterest" value="http://www.pinterest.com">
                                                </div>
                                            </div> <!-- Row END -->
                                        </div>
                                    </div>

                                    <!-- change password -->
                                    <div class="col-xxl-6">
                                        <div class="bg-secondary-soft px-4 py-5 rounded">
                                            <div class="row g-3">
                                                <h4 class="my-4">Change Password</h4>
                                                <!-- Old password -->
                                                <div class="col-md-6">
                                                    <label for="exampleInputPassword1" class="form-label">Old password
                                                        *</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1">
                                                </div>
                                                <!-- New password -->
                                                <div class="col-md-6">
                                                    <label for="exampleInputPassword2" class="form-label">New password
                                                        *</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword2">
                                                </div>
                                                <!-- Confirm password -->
                                                <div class="col-md-12">
                                                    <label for="exampleInputPassword3" class="form-label">Confirm
                                                        Password *</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Row END -->
                                <!-- button -->
                                <div class="gap-3 d-md-flex justify-content-md-end text-center">
                                    <button type="button" class="btn btn-danger btn-lg">Delete profile</button>
                                    <button type="button" class="btn btn-primary btn-lg">Update profile</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane profile-header-tab" id="fill-tabpanel-1" role="tabpanel"
                            aria-labelledby="fill-tab-1">
                            <div class="main d-flex flex-column">

                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="box shadow">
                                            <div class="d-flex justify-content-center">
                                                <h6>About Last Week</h6>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="box box1">
                                                        <div class="details">
                                                            <h3>80</h3>
                                                            <h4>PROFILE</h4>
                                                            <h4>VISITS</h4>
                                                        </div>
                                                        <div id="spark1"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="box box2">
                                                        <div class="details">
                                                            <h3>14</h3>
                                                            <h4>BOOKMARKS</h4>
                                                        </div>
                                                        <div id="spark2"></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mb-5"></div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="box box3">
                                                        <div class="details">
                                                            <h3>23</h3>
                                                            <h4>COMMENTS</h4>
                                                        </div>
                                                        <div id="spark3"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="box box4">
                                                        <div class="details">
                                                            <h3>40</h3>
                                                            <h4>LIKES</h4>
                                                        </div>
                                                        <div id="spark4"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="box shadow">
                                            <div class="d-flex justify-content-center">
                                                <h6>All Time Category Investement</h6>
                                            </div>
                                            <div id="CategoryRadar"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-5"></div>

                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="box shadow">
                                            <div class="d-flex justify-content-center">
                                                <h6>About Last Month</h6>
                                            </div>
                                            <div id="bar"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="box shadow">
                                            <div class="d-flex justify-content-center">
                                                <h6>Last Year Activity</h6>
                                            </div>
                                            <div id="HeatMap"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane profile-header-tab" id="fill-tabpanel-2" role="tabpanel"
                            aria-labelledby="fill-tab-2">
                            <div class="row notification-container">
                                <h2 class="text-center">My Notifications</h2>
                                <p class="dismiss text-right"><a id="dismiss-all" href="#">Dimiss All</a></p>
                                <div class="card notification-card notification-invitation">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td style="width:70%">
                                                    <div class="card-title">Jane invited you to join '<b>Familia</b>'
                                                        group</div>
                                                </td>
                                                <td style="width:30%">
                                                    <a href="#" class="btn btn-primary">View</a>
                                                    <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card notification-card notification-warning">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td style="width:70%">
                                                    <div class="card-title">Your expenses for '<b>Groceries</b>' has
                                                        exceeded its budget</div>
                                                </td>
                                                <td style="width:30%">
                                                    <a href="#" class="btn btn-primary">View</a>
                                                    <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card notification-card notification-danger">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td style="width:70%">
                                                    <div class="card-title">Insufficient budget to create
                                                        '<b>Clothing</b>' budget category</div>
                                                </td>
                                                <td style="width:30%">
                                                    <a href="#" class="btn btn-primary">View</a>
                                                    <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card notification-card notification-reminder">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td style="width:70%">
                                                    <div class="card-title">You have <b>2</b> upcoming payment(s) this
                                                        week</div>
                                                </td>
                                                <td style="width:30%">
                                                    <a href="#" class="btn btn-primary">View</a>
                                                    <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane profile-header-tab" id="fill-tabpanel-3" role="tabpanel"
                            aria-labelledby="fill-tab-3">
                            <h2 class="text-center">Latest Articles</h2>
                            <div class="all-articles">

                                <div class="article-container col-md-4">
                                    <div class="article-category-date">
                                        <a href="">Programming</a>
                                        <span class="date">24 March 2024</span>
                                        <span class="duration">5 min read</span>
                                    </div>
                                    <div class="article-info">
                                        <div class="article-text">
                                            <div class="article-title">
                                                <a href="">
                                                    <h2>The Brain Science Behind Aging and Forgetting</h2>
                                                </a>
                                            </div>
                                            <div class="article-subtext">
                                                A New Yorker filed a $15 million dollar lawsuit against Burger King,
                                                claiming a NYC store allowed a drug den. Locals say it's not just there.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="article-container col-md-4">
                                    <div class="article-category-date">
                                        <a href="">Programming</a>
                                        <span class="date">24 March 2024</span>
                                        <span class="duration">4 min read</span>
                                    </div>
                                    <div class="article-info">
                                        <div class="article-text">
                                            <div class="article-title">
                                                <a href="">
                                                    <h2>Marking the Webs 35th Birthday: An Open Letter</h2>
                                                </a>
                                            </div>
                                            <div class="article-subtext">
                                                Sir Tim Berners-Lees open letter to mark the occasion of the Webs 35th
                                                Birthday.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="article-container col-md-4">
                                    <div class="article-category-date">
                                        <a href="">Programming</a>
                                        <span class="date">24 March 2024</span>
                                        <span class="duration">4 min read</span>
                                    </div>
                                    <div class="article-info">
                                        <div class="article-text">
                                            <div class="article-title">
                                                <a href="">
                                                    <h2>Marking the Webs 35th Birthday: An Open Letter</h2>
                                                </a>
                                            </div>
                                            <div class="article-subtext">
                                                Sir Tim Berners-Lees open letter to mark the occasion of the Webs 35th
                                                Birthday.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="article-container col-md-4">
                                    <div class="article-category-date">
                                        <a href="">Programming</a>
                                        <span class="date">24 March 2024</span>
                                        <span class="duration">4 min read</span>
                                    </div>
                                    <div class="article-info">
                                        <div class="article-text">
                                            <div class="article-title">
                                                <a href="">
                                                    <h2>Marking the Webs 35th Birthday: An Open Letter</h2>
                                                </a>
                                            </div>
                                            <div class="article-subtext">
                                                Sir Tim Berners-Lees open letter to mark the occasion of the Webs 35th
                                                Birthday.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a href="" class="view-more">VIEW MORE</a>
                        </div>
                    </div>
                </div>


                <!-- end profile-content -->

            </div>

        </div>
    </div>

    <footer></footer>
    <script src="{{asset('js/profile.js')}}"></script>
</body>

</html>