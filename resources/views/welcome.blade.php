<!DOCTYPE html>
<html lang="en">

<head>
    <title>Labs - Design Studio</title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            <img src="{{ asset('img/logo.png') }}" alt="">
            <h2>Loading.....</h2>
        </div>
    </div>


    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            @foreach ($navbars->take(1) as $e)
                <img src="{{ asset("img/$e->path") }}" alt=""><!-- Logo -->
            @endforeach
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                @foreach ($navbars->take(1) as $e)
                    <li class="active"><a href="{{ route('welcome') }}">{{ $e->navbar1 }}</a></li>
                    <li><a href="{{ route('service') }}">{{ $e->navbar2 }}</a></li>
                    <li><a href="{{ route('blog') }}">{{ $e->navbar3 }}</a></li>
                    <li><a href="{{ route('contact') }}">{{ $e->navbar4 }}</a></li>
                @endforeach
                <li class="pl-5">
                    @if (Route::has('login'))

                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">BackOffice</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline  px-2">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif

                        @endauth

                    @endif
                </li>

            </ul>
        </nav>
    </header>
    <!-- Header section end -->

    <!-- Intro Section -->
    <div class="hero-section">
        <div class="hero-content">
            <div class="hero-center">
                @foreach ($navbars->take(1) as $e)
                    <img src="{{ asset("img/$e->path") }}" alt=""><!-- Logo -->
                @endforeach
                @foreach ($slogans as $e)
                    <p>{{ $e->slogan }}</p>
                @endforeach
            </div>
        </div>
        <!-- slider -->
        <div id="hero-slider" class="owl-carousel">
            @foreach ($bannieres as $e)
            <div class="item  hero-item" data-bg="{{ asset("img/$e->path") }}"></div>
            @endforeach
        </div>
    </div>
    <!-- Intro Section -->


    <!-- About section -->
    <div class="about-section">
        <div class="overlay"></div>
        <!-- card section -->
        <div class="card-section">
            <div class="container">
                <div class="row">
                    @foreach ($cardrapids->random(3) as $e)
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{ $e->font }}" style="font-family: fontAwesome"></i>
                            </div>
                            <h2>{{ $e->title }}</h2>
                            <p>{{ $e->description }}</p>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
        <!-- card section end-->


        <!-- About contant -->
        <div class="about-contant">
            <div class="container">
                <div class="section-title">
                    <h2> {!! $str2 !!} </h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>{{ $about->description1 }}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $about->description2 }}</p>
                    </div>
                </div>
                <div class="text-center mt60">
                    <a href="{{ route('contact') }}" class="site-btn">{{ $about->button }}</a>
                </div>
                <!-- popup video -->
                <div class="intro-video">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @foreach ($videos as $e)
                            <img src="{{ asset("img/$e->path") }}" alt="">
                            <a href="{{ $e->link }}" class="video-popup">
                                <i class="fa fa-play"></i>
                            @endforeach
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section end -->


    <!-- Testimonial section -->
    <div class="testimonial-section pb100">
        <div class="test-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="section-title left">
                        @foreach ($title as $e)
                        <h2>{{ $e->title }}</h2>
                        @endforeach
                    </div>
                    <div class="owl-carousel" id="testimonial-slide">
                        <!-- single testimonial -->
                        @foreach ($testimonial->reverse(6)->take(6) as $e)
                        <div class="testimonial">
                            
                            <span>‘​‌‘​‌</span>
                            <p>
                                {{ $e->description }}
                            </p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{ asset("img/$e->path") }}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{{ $e->name }}</h2>
                                    <p>{{ $e->title }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- single testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section end-->


    <!-- Services section -->
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Get in <span>the Lab</span> and see the services</h2>
            </div>
            <div class="row">
                <!-- single service -->
                @foreach ($cardrapids as $e)
                    
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{ $e->font }}" style="font-family: fontAwesome"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{ $e->title }}</h2>
                            <p>{{ $e->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center text-center">  
                {{ $cardrapids->links() }}  
                </div>
            <div class="text-center">
                <a href="" class="site-btn">Browse</a>
            </div>
        </div>
    </div>
    <!-- services section end -->


    <!-- Team Section -->
    <div class="team-section spad">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2>{!! $str4 !!}</h2>
            </div>
            <div class="row">
                <!-- single member -->
                <div class="row">

                    @foreach ($users as $e)
    
                        @if ($e->role_id != 2 && $e->role_id != 4 && $e->role_id != 1 && $stop != 2)
        
                            <div class="col-sm-4">
                                <div class="member">
                                    <img src="{{asset("img/$e->path")}}" alt="">
                                    <h2>{{$e->name}}</h2>
                                    <h2>{{$e->roles->name}}</h2>

                                </div>
                            </div>
                            <div class="d-none" style="display: none">{{$stop++}}</div>
                            <div class="d-none" style="display: none">{{$id = $e->id}}</div>
        
                        @endif
                    @endforeach
        
                    @foreach ($users  as $e)
        
                        @if ($e->role_id === 2)
        
                            <div class="col-sm-4">
                                <div class="member">
                                    <img src="{{asset("img/$e->path")}}" alt="">
                                    <h2>{{$e->name}}</h2>
                                    <h2>{{$e->roles->name}}</h2>

                                </div>
                            </div>
        
                            @endif
        
                    @endforeach
        
                            <div class="d-none" style="display: none">{{$stop=1}}</div>
                        @foreach ($users as $e)
        
                            @if ($e->role_id != 2 && $e->role_id != 4 && $e->role_id != 1 && $e->id != $id && $stop != 2)
        
                            <div class="col-sm-4">
                                <div class="member">
                                    <img src="{{asset("img/$e->path")}}" alt="">
                                    <h2>{{$e->name}}</h2>
                                    <h2>{{$e->roles->name}}</h2>

                                </div>
                            </div>
        
                            <div class="d-none" style="display: none">{{$stop++}}</div>
                            @endif
        
        
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section end-->


    <!-- Promotion section -->
    <div class="promotion-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>{{ $promotion->title }}</h2>
                    <p>{{ $promotion->stitle }}</p>
                </div>
                <div class="col-md-3">
                    <div class="promo-btn-area">
                        <a href="{{ route("contact") }}" class="site-btn btn-2">{{ $promotion->button }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion section end-->




    <!-- Contact section -->
    <div class="contact-section spad fix">
        <div class="container">
            <div class="row">
                <!-- contact info -->
                <div class="col-md-5 col-md-offset-1 contact-info col-push">
                    <div class="section-title left">
                        <h2>{{ $contact->title }}</h2>
                    </div>
                    <p>{{ $contact->text }}</p>
                    <h3 class="mt60">{{ $contact->title2 }}</h3>
                    <p class="con-item">{{ $contact->adress }}</p>
                    <p class="con-item">{{ $contact->numero }}</p>
                    <p class="con-item">{{ $contact->email }}</p>
                </div>
                <!-- contact form -->
                <div class="col-md-6 col-pull">
                    <form action="/send-email" method="post" class="form-class" id="con_form">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" placeholder="Your name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="email" placeholder="Your email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="subject" placeholder="Subject">
                                <textarea name="message" placeholder="Message"></textarea>
                                <button class="site-btn">{{ $contact->button }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact section end-->


    <!-- Footer section -->
    <footer class="footer-section">
        <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    </footer>
    <!-- Footer section end -->




    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
