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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Document</title>
</head>

<body>
    @include('navbar')
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
                            <img src="{{ Storage::url($user->avatar) }}" alt="Profile photo \n not found">
                        </div>
                        <!-- END profile-header-img -->
                        <!-- BEGIN profile-header-info -->
                        <div class="profile-header-info">
                            <h4 class="mt-10 mb-3">{{$user->name}}</h4>
                            <p class="mb-10">{{$user->shortbio}}</p>
                            <p class="mb-10">I am from {{$user->position}}, Welcome to my profile</p>
                        </div>
                        <!-- END profile-header-info -->
                    </div>
                    <!-- END profile-header-content -->

                    @auth
                    @if(auth()->user()->usertype === 'admin' || auth()->user()->id === $user->id)
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
                                Stats
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3" role="tab"
                                aria-controls="fill-tabpanel-3" aria-selected="false">
                                Articles
                            </a>
                        </li>
                    </ul>
                    <!-- END profile-header-tab -->
                    @else
                    <!-- BEGIN profile-header-tab -->
                    <ul class="profile-header-tab nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_ active" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1"
                                role="tab" aria-controls="fill-tabpanel-1" aria-selected="true">
                                Stats
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3" role="tab"
                                aria-controls="fill-tabpanel-3" aria-selected="false">
                                Articles
                            </a>
                        </li>
                    </ul>
                    <!-- END profile-header-tab -->
                    @endif
                    @endauth

                    @guest
                    <!-- BEGIN profile-header-tab -->
                    <ul class="profile-header-tab nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_ active" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1"
                                role="tab" aria-controls="fill-tabpanel-1" aria-selected="true">
                                Stats
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link_" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3" role="tab"
                                aria-controls="fill-tabpanel-3" aria-selected="false">
                                Articles
                            </a>
                        </li>
                    </ul>
                    <!-- END profile-header-tab -->
                    @endguest

                </div>
                <!-- end profile -->
                <div class="pb-3"></div>
                <!-- begin profile-content -->
                <div class="rounded shadowbig boxbig">
                    <div class="tab-content pt-5 rounded" id="tab-content">
                        @auth
                        @if(auth()->user()->usertype === 'admin' || auth()->user()->id === $user->id)
                        <div class="tab-pane active profile-header-tab" id="fill-tabpanel-0" role="tabpanel"
                            aria-labelledby="fill-tab-0">
                            @if(Session::has('success'))
                            <div class="alert alert-success" style="width:40%;">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger" style="width:40%;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- CSRF Token -->
                                <div class="row mb-5 gx-5">
                                    <!-- Contact detail -->
                                    <div class="col-xxl-8 mb-5 mb-xxl-0">
                                        <div class="bg-secondary-soft px-4 py-5 rounded">
                                            <div class="row g-3">
                                                <h4 class="mb-4 mt-0">Contact detail</h4>
                                                <!-- First Name -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="First name" name="name" value="{{$user->name}}">
                                                    <input type="hidden" name="id" value="{{ $user->id }}">

                                                </div>
                                                <!-- Phone number -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Phone number</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Phone number" name="phone" value="{{$user->phone}}">

                                                </div>
                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <label for="inputEmail4" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4"
                                                        name="email" value="{{$user->email}}">

                                                </div>
                                                <!-- Location -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Location</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Location" name="position"
                                                        value="{{$user->position}}">
                                                </div>
                                                <!-- Institution -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Institution</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Institution" name="institution"
                                                        value="{{$user->institution}}">
                                                </div>
                                                <!-- Short Bio -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Short Bio</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Short Bio" name="shortbio"
                                                        value="{{$user->shortbio}}">
                                                </div>
                                            </div> <!-- Row END -->
                                        </div>
                                    </div>
                                    <!-- Upload profile -->
                                    <div class="col-xl-4">
                                        <div class="bg-secondary-soft px-4 py-5 rounded">

                                            <div class="row g-3">
                                                <h4 class="mb-4 mt-0">Upload your profile photo</h4>
                                                <div class="text-center">
                                                    <!-- Image upload -->
                                                    <div class="square position-relative display-2 mb-3"
                                                        id="image-preview">
                                                        <i
                                                            class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>
                                                    </div>
                                                    <!-- Button -->
                                                    <input type="file" id="customFile" name="photo" hidden=""
                                                        accept=".jpg, .png, .jpeg, .gif, .svg">

                                                    <label class="btn btn-success-soft btn-block" style="margin-top: 2rem;"
                                                        for="customFile">Upload</label>
                                                    <button type="button" class="btn btn-danger-soft" style="margin-top: 2rem;"
                                                        id="remove-photo">Remove</button>
                                                    <!-- Content -->
                                                    <p class="text-muted mt-3 mb-0">
                                                        <span class="me-1">Note:</span>
                                                        Maximum size is 4 MB
                                                    </p>
                                                    <p id="upload-feedback" class="text-success mt-2 d-none">Photo
                                                        uploaded successfully!</p>
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
                                                    <label class="form-label">
                                                        <i class="fab fa-fw fa-facebook me-2 text-facebook">
                                                        </i>
                                                        Twitter
                                                    </label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Facebook" name="twitter" value="{{$user->twitter}}">
                                                </div>
                                                <!-- Linkedin -->
                                                <div class="col-md-6">
                                                    <label class="form-label"><i
                                                            class="fab fa-fw fa-linkedin-in text-linkedin me-2"></i>Github
                                                    </label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Linkedin" name="github" value="{{$user->github}}">
                                                </div>
                                                <!-- instagram -->
                                                <div class="col-md-6">
                                                    <label class="form-label"><i
                                                            class="fab fa-fw fa-instagram text-instagram me-2"></i>Linkedin
                                                    </label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        aria-label="Instragram" name="linkedin"
                                                        value="{{$user->linkedin}}">
                                                </div>
                                            </div> <!-- Row END -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Change password -->
                                <div class="row mb-5 gx-5">
                                    <div class="col-xxl-6">
                                        <div class="bg-secondary-soft px-4 py-5 rounded">
                                            <div class="row g-3">
                                                <h4 class="my-4">Change Password</h4>
                                                <!-- Old password -->
                                                <div class="col-md-6">
                                                    <label for="exampleInputPassword1" class="form-label">Old password
                                                    </label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" name="old_password">
                                                </div>
                                                <!-- New password -->
                                                <div class="col-md-6">
                                                    <label for="exampleInputPassword2" class="form-label">New password
                                                    </label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword2" name="new_password">
                                                </div>
                                                <!-- Confirm password -->
                                                <div class="col-md-12">
                                                    <label for="exampleInputPassword3" class="form-label">Confirm
                                                        Password </label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword3" name="confirm_password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Row END -->
                                <!-- Button -->
                                <div class="gap-3 d-md-flex justify-content-md-end text-center">
                                    <button type="submit" class="btn btn-danger btn-lg"
                                        formaction="{{ route('profile.destroy-user') }}">Delete
                                        profile</button>
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        formaction="{{ route('profile.submit-form') }}">Update
                                        profile</button>
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
                                                <h6>Fast Numbers For You</h6>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="box box1">
                                                        <div class="details">
                                                            <h3> {{$dashboard['sparks']['reads_count']}}</h3>
                                                            <h4>USER READS</h4>
                                                        </div>
                                                        <div id="spark1"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="box box2">
                                                        <div class="details">
                                                            <h3> {{$dashboard['sparks']['bookmarks_count']}}</h3>
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
                                                            <h3>{{$dashboard['sparks']['comments_count']}}</h3>
                                                            <h4>COMMENTS</h4>
                                                        </div>
                                                        <div id="spark3"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="box box4">
                                                        <div class="details">
                                                            <h3> {{$dashboard['sparks']['likes_count']}}</h3>
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
                        <div class="tab-pane profile-header-tab" id="fill-tabpanel-3" role="tabpanel"
                            aria-labelledby="fill-tab-3">
                            <h2 class="text-center">Latest Articles</h2>
                            <div class="all-articles">
                            @foreach($latestArticles as $article)
                                <div class="article-container col-md-4">
                                    <div class="article-category-date">
                                        <a href="">{{$article->category}}</a>
                                        <span class="date">{{$article->timestamp}}</span>
                                        <span class="duration">5 min read</span>
                                    </div>
                                    <div class="article-info">
                                        <div class="article-text">
                                            <div class="article-title">
                                                <a href="">
                                                    <h2>{{$article->title}}</h2>
                                                </a>
                                            </div>
                                            <div class="article-subtext">
                                            {{$article->description}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </div>
                            <a href="" class="view-more">VIEW MORE</a>
                        </div>
                        @else
                        <div class="tab-pane active profile-header-tab" id="fill-tabpanel-1" role="tabpanel"
                            aria-labelledby="fill-tab-1">
                            <div class="main d-flex flex-column">

                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="box shadow">
                                            <div class="d-flex justify-content-center">
                                                <h6>Fast Numbers For You</h6>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="box box1">
                                                        <div class="details">
                                                            <h3> {{$dashboard['sparks']['reads_count']}}</h3>
                                                            <h4>USER READS</h4>
                                                        </div>
                                                        <div id="spark1"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="box box2">
                                                        <div class="details">
                                                            <h3>{{$dashboard['sparks']['bookmarks_count']}}</h3>
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
                                                            <h3>{{$dashboard['sparks']['comments_count']}}</h3>
                                                            <h4>COMMENTS</h4>
                                                        </div>
                                                        <div id="spark3"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="box box4">
                                                        <div class="details">
                                                            <h3>{{$dashboard['sparks']['likes_count']}}</h3>
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
                        <div class="tab-pane profile-header-tab" id="fill-tabpanel-3" role="tabpanel"
                            aria-labelledby="fill-tab-3">
                            <h2 class="text-center">Latest Articles</h2>
                            <div class="all-articles">
                            @foreach($latestArticles as $article)
                                <div class="article-container col-md-4">
                                    <div class="article-category-date">
                                        <a href="">{{$article->category}}</a>
                                        <span class="date">{{$article->timestamp}}</span>
                                        <span class="duration">5 min read</span>
                                    </div>
                                    <div class="article-info">
                                        <div class="article-text">
                                            <div class="article-title">
                                                <a href="">
                                                    <h2>{{$article->title}}</h2>
                                                </a>
                                            </div>
                                            <div class="article-subtext">
                                            {{$article->description}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        @endif
                        @endauth

                        @guest
                        <div class="tab-pane active profile-header-tab" id="fill-tabpanel-1" role="tabpanel"
                            aria-labelledby="fill-tab-1">
                            <div class="main d-flex flex-column">

                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="box shadow">
                                            <div class="d-flex justify-content-center">
                                                <h6>Fast Numbers For You</h6>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="box box1">
                                                        <div class="details">
                                                            <h3> {{$dashboard['sparks']['reads_count']}}</h3>
                                                            <h4>USER READS</h4>
                                                        </div>
                                                        <div id="spark1"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="box box2">
                                                        <div class="details">
                                                            <h3>{{$dashboard['sparks']['bookmarks_count']}}</h3>
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
                                                            <h3>{{$dashboard['sparks']['comments_count']}}</h3>
                                                            <h4>COMMENTS</h4>
                                                        </div>
                                                        <div id="spark3"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="box box4">
                                                        <div class="details">
                                                            <h3> {{$dashboard['sparks']['likes_count']}}</h3>
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
                        <div class="tab-pane profile-header-tab" id="fill-tabpanel-3" role="tabpanel"
                            aria-labelledby="fill-tab-3">
                            <h2 class="text-center">Latest Articles</h2>
                            <div class="all-articles">
                            @foreach($latestArticles as $article)
                                <div class="article-container col-md-4">
                                    <div class="article-category-date">
                                        <a href="">{{$article->category}}</a>
                                        <span class="date">{{$article->timestamp}}</span>
                                        <span class="duration">5 min read</span>
                                    </div>
                                    <div class="article-info">
                                        <div class="article-text">
                                            <div class="article-title">
                                                <a href="">
                                                    <h2>{{$article->title}}</h2>
                                                </a>
                                            </div>
                                            <div class="article-subtext">
                                            {{$article->description}}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        @endguest
                    </div>
                </div>


                <!-- end profile-content -->

            </div>
        </div>
    </div>

    <footer></footer>
    <script>
        var dashboard = {!! json_encode($dashboard) !!};
    </script>

    <script src="{{asset('js/profile.js')}}"></script>
    <script src="{{asset('js/dark-mode.js')}}"></script>
</body>

</html>