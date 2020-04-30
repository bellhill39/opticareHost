<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Opti Care</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css',true)}}">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/bf96bc6662.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">

    <!-- AOS animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- MDB Nav -->


    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

    <style>
        #texttween {
            position: relative;
            width: 535px;
            height: 400px;
            top: 122px;
            padding-right:60px;
        }
        #texttween .text {
            position: absolute;
        }
    </style>

</head>
<body>
<!-- Navbar -->
<section id ="navbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
                <strong>Opti Care</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link nav-home">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-contact">Contact Us</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/Opti-Care-112477663732178/" class="nav-link" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        @if(!Auth::check())
                        <a href="{{route('login')}}" class="nav-link border border-light rounded"
                           target="_blank">
                            <i class="fas fa-sign-in-alt"></i>  Login
                        </a>
                            @else

                            <a href="/dashboard" class="nav-link border border-light rounded"
                               target="_blank">
                                <i class="fas fa-sign-in-alt"></i>  Login
                            </a>

                            @endif

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
</section>

<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="video-bg">
        <source src="videos/Opti.mp4" type="video/mp4">
        <!-- <source src="https://drive.google.com/open?id=16TFTVazuSh3x3FLPe9a4nEG8zGmakQSs" type="video/mp4"> -->
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">

            <div class="w-100 text-white">
                <h1 class="display-3">Opti-Care</h1>
                <p class="lead mb-0">Fight against Blindness</p>
            </div>
        </div>
    </div>
</header>
<div class="sectionArrow"></div>
<section id ="services">
    <div class="container-fluid whiteBackground">
        <div data-aos="fade-up">
            <h1 style="padding-bottom: 50px">Services</h1>
        </div>
        <div class="row" data-aos="flip-left">

            <div class="feature-box col-lg-3 col-md-6 portfolio-box">
                <i class="icon fas fa-font fa-4x"></i>
                <!-- <i class="fas fa-font"></i> -->
                <h3 class="feature-title">Self Testing methods </h3>
                <p>Identify common reflective in home using our simple methods</p>
            </div>
            <div class="feature-box col-lg-3 col-md-6 portfolio-box">
                <i class="icon fas fa-map-signs fa-4x"></i>
                <!-- <i class="fas fa-map-signs"></i> -->
                <h3 class="feature-title">Near By Opticians</h3>
                <p>Identify and locate near by qualified opticians</p>
            </div>
            <div class="feature-box col-lg-3 col-md-6 portfolio-box">
                <i class="icon fas fa-bell fa-4x"></i>
                <!-- <i class="fas fa-bell"></i> -->
                <h3 class="feature-title">Reminders</h3>
                <p>Patients get reminders from their family opticians</p>
            </div>
            <div class="feature-box col-lg-3 col-md-6 portfolio-box">
                <i class="icon far fa-calendar-check fa-4x"></i>
                <!-- <i class="far fa-calendar-check"></i> -->
                <h3 class="feature-title">Appointment and Record managment</h3>
                <p>Optician can easily manage their patients now </p>
            </div>
        </div>

    </div>

</section>

<section id = "about">
    <div class="container-fliud whiteBackground" >
        <div data-aos="fade-up">
            <h1>About us</h1>
            <div class="row">
                <div class="col-lg-6 aboutImage" data-aos="fade-left">
                    <img src="{{asset('img/optiLogo.png')}}" height="700px"alt="">
                </div>
                <div class="col-lg-6 " data-aos="fade-right">
                    <div id="texttween">
                        <!-- <span class="text">Opti-care is not an application just diagnose eye related diseases, it implements the follow ups needed to minimize the eye related diseases by creating a platform for both opticians and patients. With the use of opti-care patients have the capability to measure the progress of the eye rather than visiting the optician unnecessarily.</span>
                        <span class="text">Out of the seven billion people most of them have difficulties when it comes to eye health .Due to lack of knowledge and busy time schedules people intend to take vision for granted</span>
                        <span class="text">By connecting the opticians and patients we can minimize the damage that will cause vision loss. The best way to connect the optician and patient is by allowing them to communicate through a platform.</span> -->

                        <span class="text">Opti-care is not an application just diagnose eye related diseases</span>
                        <span class="text">it implements the follow ups needed to minimize the eye related diseases by creating a platform for both opticians and patients</span>
                        <span class="text">By connecting the opticians and patients we can minimize the damage that will cause vision loss.</span>
                        <span class="text">The best way to connect the optician and patient is by allowing them to communicate through a platform.</span>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section id="contactUs">
    <div class="container-fluid whiteBackground" style="padding-top:20px;">
        <div data-aos="fade-up">
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
        </div>
        <div class="row" data-aos="fade-left" style="padding-top:30px">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="validateForm();">Send</a>
                    <!-- <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a> -->
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Scarborough, ON , Canada</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+1 (647)-609-(****)</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>Opticare@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>

</section>
<!--Section: Contact v.2-->


</div>

</section>

<footer class="white-section" id="footer" data-aos="zoom-in">
    <div class="container-fluid" data-aos="zoom-in">
        <a href="https://www.facebook.com/Opti-Care-112477663732178/">
            <i class="social-icon fab fa-facebook-f"></i>
        </a>
        <a href="#contactUs">
            <i class="social-icon fas fa-envelope"></i>
        </a>
        <p>© Copyright 2020 Opti-Care</p>
    </div>
</footer>


<script src="{{asset('js/index.js',true)}}" charset="utf-8"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- MDB scripts -->

<!-- JQuery -->
<!-- text change -->

<script src="{{asset('js/jquery-textTweener.min.js',true)}}"></script>

<script>
    $("#texttween").TextTweener({
        duration: "6000"
    });
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
</body>
</html>
