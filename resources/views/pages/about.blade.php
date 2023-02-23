@extends('template.layout')

@section('content')

    <section class="home-sec" style="background-image: url('img/main/background.png')">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12  text-center hero-section">
                    <h1>About Us</h1>
                    <p>OT&T is a premier African information technology consulting firm. We help our corporate customers to develop solutions using computer information...</p>
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
            <a href="{{url("/projects")}}">
            <div class="button button-rounded button-rounded--primary mr-2" id="btn-prev-page">
                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.719227 9.00584C0.647352 8.83197 0.687365 8.63191 0.820564 8.49906L9.18911 0.130513C9.37378 -0.0478849 9.66812 -0.0427417 9.84652 0.141933C10.0205 0.322118 10.0205 0.607738 9.84652 0.78788L2.27111 8.36329H22.5351C22.7918 8.36333 23 8.5715 23 8.82827C23 9.08503 22.7918 9.2932 22.5351 9.2932H2.27111L9.84556 16.8677C10.0302 17.046 10.0354 17.3403 9.85698 17.5251C9.67858 17.7097 9.38429 17.7148 9.19957 17.5365C9.19569 17.5327 9.1919 17.5289 9.18815 17.5251L0.819607 9.15651C0.77663 9.11332 0.742502 9.06215 0.719227 9.00584Z" fill="black"></path>
                    </svg>
                </div>
            </a>
            <a href="{{url("/HumanCapitalDevelopment")}}">
            <div class="button button-rounded button-rounded--primary ml-2" id="btn-next-page">
                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.2808 9.00584C22.3526 8.83197 22.3126 8.63191 22.1794 8.49906L13.8109 0.130513C13.6262 -0.0478849 13.3319 -0.0427417 13.1535 0.141933C12.9795 0.322118 12.9795 0.607738 13.1535 0.78788L20.7289 8.36329H0.464934C0.208168 8.36333 0 8.5715 0 8.82827C0 9.08503 0.208168 9.2932 0.464934 9.2932H20.7289L13.1544 16.8677C12.9698 17.046 12.9646 17.3403 13.143 17.5251C13.3214 17.7097 13.6157 17.7148 13.8004 17.5365C13.8043 17.5327 13.8081 17.5289 13.8118 17.5251L22.1804 9.15651C22.2234 9.11332 22.2575 9.06215 22.2808 9.00584Z" fill="black"></path>
                    </svg>
                </div>
            </a>
        </div>

    </section>

<section class="dark-sec py-lg-5 pt-sm-3">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h4>
                    OT&T is a premier African business <span class="green-text">technology consulting</span> firm. We analyse, develop, and implement solutions using technology and <span class="green-text"> information systems </span> for our customers. Our goal is to reduce the risks in business and enable our clients to achieve their <span class="green-text"> strategic goals.</span>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="#">
                    <span class="material-symbols-outlined">
                        expand_more
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col-md-3 border border-light">
                <img src="" alt="">
            </div>
            <div class="col-md-9">
                <p style="font-size:20px;">
                    At OT&T, we leverage global strategic partnerships to optimise competitive advantages for our customers. We support our clients to maximise their capabilities and to improve their customer experience, which leads to increased revenue generation.
                </p>
                <div class="row">
                    <div class="col-md-12">
                        <p class="border border-bottom-1 border-top-0 border-right-0 border-left-0 pb-2 text-center" style="width:17%; font-size:18px;">
                            Our People
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  my-lg-5 ">
        <div class="row">
            <div class="col-sm-12 col-lg-8 offset-lg-4 py-5 my-lg-5 bg-light " >
                <div class="row my-5 ">
                    <div class="col-md-12  d-flex flex-row flex-wrap justify-content-center align-items-center h-100" >
                        <a href="/lanre" class="card-info card-info-1 green-bg m-2 text-decoration-none">
                            <div class="overlay"></div>
                                {{-- <img src="img/lanre.jpeg" alt="" class="img-fluid" style="width:580px; height:100%;"> --}}
                                <div class="about-name">
                                    <h3 class="dark-green-text">
                                        Lanre Kuye
    
                                    </h3>
                                    <p>
                                        General managing partner
                                    </p>
                                </div>
                        </a>
                        <a href="/grace" class="card-info card-info-2 m-2 text-decoration-none">
                            <div class="overlay"></div>
                                {{-- <img src="img/lanre.jpeg" alt="" class="img-fluid" style="width:580px; height:100%;"> --}}
                                <div class="about-name">
                                    <h3 class="dark-green-text">
                                        Grace Aba Ayensu
                                    </h3>
                                    <p>
                                        Managing partner - Ghana
                                    </p>
                                </div>
                        </a>

                    </div>
                </div>
                <div class="row my-5">
                    <div  id="wrapper-Q">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    Join our team
                                </h1>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="wrap-text-about">
                                <p>
                                    We value awesome individuals who make it their priority to never settle for less. Be a part of a team passionate and dedicated to improving human resource capital across Africa.
                                </p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="border border-bottom-1 border-top-0 border-right-0 border-left-0 pb-2 text-left" style="font-size:18px;">
                                    Our People
                                </p>
                            </div>
                        </div>
                    </div>
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
                            <a href="" class="button button-rounded button-rounded--primary">
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
    