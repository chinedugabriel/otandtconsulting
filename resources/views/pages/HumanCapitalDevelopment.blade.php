@extends('template.layout')

@section('content')

    <section class="home-sec" style="background-image: url('img/main/background.png');">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-12 col-lg-12 col-md-12  text-center hero-section">
                    <h1>Special Focus Area: Human Capital Developments</h1>
                    <p>We take special interest in furthering IT literacy and maximising human capital potential within Africa..</p>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12 text-center">
                    <button>Watch Video</button>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12 text-center sub-indecate" >
                    <p>Tap for more</p>
                </div>
            </div>
        </div>

        <div class="arrow-nav">
            <a href="{{url("/about")}}">
            <div class="button button-rounded button-rounded--primary mr-2" id="btn-prev-page">
                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.719227 9.00584C0.647352 8.83197 0.687365 8.63191 0.820564 8.49906L9.18911 0.130513C9.37378 -0.0478849 9.66812 -0.0427417 9.84652 0.141933C10.0205 0.322118 10.0205 0.607738 9.84652 0.78788L2.27111 8.36329H22.5351C22.7918 8.36333 23 8.5715 23 8.82827C23 9.08503 22.7918 9.2932 22.5351 9.2932H2.27111L9.84556 16.8677C10.0302 17.046 10.0354 17.3403 9.85698 17.5251C9.67858 17.7097 9.38429 17.7148 9.19957 17.5365C9.19569 17.5327 9.1919 17.5289 9.18815 17.5251L0.819607 9.15651C0.77663 9.11332 0.742502 9.06215 0.719227 9.00584Z" fill="black"></path>
                    </svg>
                </div>
            </a>
            <a href="{{url("/contact")}}">
            <div class="button button-rounded button-rounded--primary ml-2" id="btn-next-page">
                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.2808 9.00584C22.3526 8.83197 22.3126 8.63191 22.1794 8.49906L13.8109 0.130513C13.6262 -0.0478849 13.3319 -0.0427417 13.1535 0.141933C12.9795 0.322118 12.9795 0.607738 13.1535 0.78788L20.7289 8.36329H0.464934C0.208168 8.36333 0 8.5715 0 8.82827C0 9.08503 0.208168 9.2932 0.464934 9.2932H20.7289L13.1544 16.8677C12.9698 17.046 12.9646 17.3403 13.143 17.5251C13.3214 17.7097 13.6157 17.7148 13.8004 17.5365C13.8043 17.5327 13.8081 17.5289 13.8118 17.5251L22.1804 9.15651C22.2234 9.11332 22.2575 9.06215 22.2808 9.00584Z" fill="black"></path>
                    </svg>
                </div>
            </a>
        </div>

    </section>

<section class="dark-sec-HCD py-lg-5 pt-3">
    <div class="container my-lg-5 my-3">
        <div class="row">
            <div class="col-md-12">
                <p style="font-size:20px;">
                    At OAK Telecom and Technology Consulting Limited, we are dedicated to solving the issue of lacking skills and experience across the region.
                </p>
            </div>
        </div>
        
    </div>

    <div class="container-fluid  my-lg-5 px-3 px-md-0">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-11 offset-lg-1 py-2 py-lg-5 my-lg-5 bg-light " >
                <div class="row my-lg-5">
                    <div class="col-sm-12 col-md-12 col-lg-9 offset-lg-2 dark-green-text">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h1 class="internship-text">
                                    Internship
                                </h1>
                            </div>
                        </div>
                        <div class="row my-lg-5 mt-2">
                            <div class="col-md-7 ">
                                <p>
                                    At OT&T, we value the development of the minds and talents of African youth. In 2005, we formed and internship project with the University of Lagos and added Caleb University to the project in 2015 with prospects of again expanding our program in 2021. Our facility, EvolveITAfrica, was established with the specific purpose of engaging resources on an internship basis and applying them to real life development projects.
                                </p>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-12">
                                <p>
                                    We capitalize on research, product development, project enhancement, and monitoring to prime our interns for full-time employment. We take pride in our role in the development of the student’s skillset and preparing them to enter various IT sectors from operations support to graphics and application development. Does the opportunity to challenge yourself and learn new skills sound appealing? Then get in touch with us to learn more about how you can be a part of the internship program here at OT&T.
                                </p>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-12 text-center">
                                <a href="{{url("/contact")}}" class="border border-bottom-1 border-top-0 border-right-0 border-left-0 pb-2 text-left" style="font-size:18px;">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <div class="row py-lg-5 mb-lg-5 px-3 px-md-0">
        <div  id="wrapper-Q-HCD" class="py-lg-5 px-3">
            <div class="row mb-5 my-lg-5">
                <div class="col-sm-12 col-md-12 col-lg-9 offset-lg-2 text-left mb-0 p-3">
                    <h1 class="internship-text">
                        Careers
                    </h1>
                </div>
            </div>
            <div class="row my-lg-5 my-0">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 pl-lg-5 ">
                    <p class=" hcd-text-wrapper-content">
                        We work with some of the most diverse clients and are always on the look-out for talented professionals to add to our team of world-class experts. If you’re ready to be at the forefront of Africa’s digital transformation, pick up new skills, and learn from intelligent and motivated people? Get in touch with us to see how you can further your career here at OT&T.
                    </p>

                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 text-center hcd-text-wrapper">
                    <p class="border border-bottom-1 border-top-0 border-right-0 border-left-0 pb-2 text-center" style="font-size:18px; ">
                        Our People
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-bg-img">
    <div class="footer-wrapper">
        <div class="about-text-wrapper">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-12  text-center hero-section">
                        <h1>Contact Us</h1>
                        <div class="mt-5" style="width:100%; display:flex; justify-content:center;">
                            <a href="{{url("/contact")}}" class="button button-rounded button-rounded--primary">
                                <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2808 9.00584C22.3526 8.83197 22.3126 8.63191 22.1794 8.49906L13.8109 0.130513C13.6262 -0.0478849 13.3319 -0.0427417 13.1535 0.141933C12.9795 0.322118 12.9795 0.607738 13.1535 0.78788L20.7289 8.36329H0.464934C0.208168 8.36333 0 8.5715 0 8.82827C0 9.08503 0.208168 9.2932 0.464934 9.2932H20.7289L13.1544 16.8677C12.9698 17.046 12.9646 17.3403 13.143 17.5251C13.3214 17.7097 13.6157 17.7148 13.8004 17.5365C13.8043 17.5327 13.8081 17.5289 13.8118 17.5251L22.1804 9.15651C22.2234 9.11332 22.2575 9.06215 22.2808 9.00584Z" fill="black"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-year">
        <p>
            © {{date("Y");}}. OT&T Consulting
        </p>
    </div>
</section>





@endsection
    