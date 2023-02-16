<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
         <meta name="viewport" content="width=device-width,initial-scale=1"/><meta name="theme-color" content="#000000"/><meta name="description" content="OT&T is a premier African information technology consulting firm. We analyse, develop, and implement solutions using technology and information systems for our customers."/><link rel="apple-touch-icon" href="favicon.png"/><link rel="manifest" href="manifest.json"/><link rel="stylesheet" href="css/webfont.css"/>

        <title>OT&T</title>

            <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/asset/app.css">
        
        <!-- Google icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <!-- Anime.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    </head>
    <body>
        <nav>
            <div class="nav-list animate__animated  animate__fadeInDown" id="nav-list">
                <div class="simple-view-nav" id="simple-vaiew-nav">
                    <a href="{{url("/about")}}" class="d-flex flex-md-row justify-content-center align-items-center" >
                        <span class="material-symbols-outlined">
                            arrow_back
                            </span>
                            <span class="text-light">
                                Our People
                            </span>
                    </a>

                    <button type="button" id="close-nav">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="sec-nav-list">
                    <ul>
                        <li class="animate__animated animate__fadeInUp animate__slow">
                            <a href='{{url("/services")}}'>
                                Service
                            </a>
                        </li>
                        <li class="animate__animated animate__fadeInUp animate__delay-1s">
                            <a href="{{url("/projects")}}">
                                Projects
                            </a>
                        </li>
                        <li class="animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="{{url("/about")}}">
                                About
                            </a>
                        </li>
                        <li class="animate__animated animate__fadeInUp animate__delay-3s">
                            <a href="{{url("/contact")}}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-caption animate__animated animate__fadeInUp animate__slow">
                    <p>
                        <a href="{{url("/HumanCapitalDevelopment")}}">
                            Human Capital Development
                        </a>
                    </p>

                    <p>
                        <a href="{{url("/vid/oat1.mp4")}}">
                             Watch Video
                        </a>
                    </p>
                    {{-- <p>
                        <a href="{{url("/contact")}}">Contact Us</a>
                    </p> --}}
                </div>
            </div>
            {{-- this green div is used for transistion between the navigation --}}
            {{-- <div class="green-show" id="green-slide-show"></div> --}}

            <div class="nav-wrapper" id="nav-wrapper">
                <div class="simple-view-nav" id="simple-vaiew-nav">
                    <a href="{{url("/about")}}" class="d-flex flex-md-row justify-content-center align-items-center" >
                        <span class="material-symbols-outlined">
                            arrow_back
                            </span>
                            <span class="text-light">
                                Our People
                            </span>
                    </a>
                    <button class="nav-btn" type="button" id="open-nav">
                        <svg width="52" height="51" viewBox="0 0 36 17" class="header-menu-icon" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="16" y1="8.5" x2="36" y2="8.5" stroke="#CBBEA9"></line><line y1="0.5" x2="36" y2="0.5" stroke="#CBBEA9"></line><line x1="7" y1="16.5" x2="36" y2="16.5" stroke="#CBBEA9"></line></svg>
                    </button>
                </div>
            </div>
        </nav>

        @yield('content')


        <script src="asset/app.js"></script>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
