@extends('template.servicelist')

@section('content')

<section class="project-body-height d-flex justify-content-center align-items-md-start" style=" padding:1% 0px 0px 0px;  ">
    <div class="container-fluid pt-sm-3 pt-4">
        <div class="row py-sm-3 pt-sm-5 mt-sm-5 mt-md-5 ">
            <div class="col-sm-12 col-md-12 col-lg-12  my-sm-5 my-md-0 my-5">
                <div class="row">
                    <div class="col-12 col-md-6 col-sm-12 col-lg-6 offset-md-3 offset-lg-3 text-center my-4">
                        <h1>
                            Business Analysis & Strategy
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-sm-12 col-lg-6 offset-md-3 offset-lg-3 bg-light text-dark p-5">
                        <p style="font-size:18px; line-height:32px;">
                            We apply first-class tools, combined with the deep and diverse knowledge of the OT&T team, to identify and evaluate our clients’ business risks. We take into consideration compliance, procedural rules, and technical risks to construct a business strategy specific and unique to our client’s needs. At every point in our client’s life cycle, we offer advice on how to appropriately apply available skillsets and assets to manage potential setbacks and respond to new opportunities. At OT&T, we pride ourselves for our transparency and great communication, ensuring our clients remain informed with little doubt about our managed services.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="arrow-nav d-none d-sm-none d-md-flex d-lg-flex">
        <a href="{{url("/technologyInvestmentAdvisory")}}">
        <div class="button button-rounded button-rounded--primary mr-2" id="btn-prev-page">
                <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.719227 9.00584C0.647352 8.83197 0.687365 8.63191 0.820564 8.49906L9.18911 0.130513C9.37378 -0.0478849 9.66812 -0.0427417 9.84652 0.141933C10.0205 0.322118 10.0205 0.607738 9.84652 0.78788L2.27111 8.36329H22.5351C22.7918 8.36333 23 8.5715 23 8.82827C23 9.08503 22.7918 9.2932 22.5351 9.2932H2.27111L9.84556 16.8677C10.0302 17.046 10.0354 17.3403 9.85698 17.5251C9.67858 17.7097 9.38429 17.7148 9.19957 17.5365C9.19569 17.5327 9.1919 17.5289 9.18815 17.5251L0.819607 9.15651C0.77663 9.11332 0.742502 9.06215 0.719227 9.00584Z" fill="black"></path>
                </svg>
            </div>
        </a>
        <a href="{{url("/softwareAndApplicationsDevelopment")}}">
        <div class="button button-rounded button-rounded--primary ml-2" id="btn-next-page">
                <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.2808 9.00584C22.3526 8.83197 22.3126 8.63191 22.1794 8.49906L13.8109 0.130513C13.6262 -0.0478849 13.3319 -0.0427417 13.1535 0.141933C12.9795 0.322118 12.9795 0.607738 13.1535 0.78788L20.7289 8.36329H0.464934C0.208168 8.36333 0 8.5715 0 8.82827C0 9.08503 0.208168 9.2932 0.464934 9.2932H20.7289L13.1544 16.8677C12.9698 17.046 12.9646 17.3403 13.143 17.5251C13.3214 17.7097 13.6157 17.7148 13.8004 17.5365C13.8043 17.5327 13.8081 17.5289 13.8118 17.5251L22.1804 9.15651C22.2234 9.11332 22.2575 9.06215 22.2808 9.00584Z" fill="black"></path>
                </svg>
            </div>
        </a>
    </div>

</section>

@endsection
