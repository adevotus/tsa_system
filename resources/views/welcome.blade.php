@include('layouts.welcome.header')

@include('layouts.welcome.sidebar')
  

    <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('web/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h2 class="subheading">What We Do</h2>
                    <h1>Supporting Startups on
                        <span class="txt-rotate" data-period="2000" data-rotate='[ "Lobbying", "Networks", "Capacity", "Research", "Advocacy"]'></span>
                    </h1>
                    <!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> -->
                    <p class="mb-4">
                        A membership-based umbrella organisation that brings together stakeholders of Tanzania's startup ecosystem to lobby, advocate and drive for frameworks that create a conducive business environment for the ecosystems to grow and scale.
                    </p>
                    <p><a href="contact.html" class="btn btn-primary mr-md-4 py-2 px-4">Contact Us <span class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-no-pt ftco-no-pb" id="mission">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section ftco-animate">
                    <h2 class="mt-4">Why Tanzania Startup Association</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url({{asset('web/images/person_1.jpg')}});">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Greetings from the TSA Board of Directors</span>
                            <p class="mb-4 justify-content-md-end" style="text-align: justify;">
                                About 1,000,000 job seekers enter the Tanzania labor market annually, according to <span><a href="https://www.tro.go.tz/wp-content/uploads/2021/06/FYDP-III-English.pdf " style="color:#000;">Office of Treasury Registerar</a></span>,
                                while the economy's capacity to create new jobs is less than 40,000 per annum in the public sector and 300,000 in the private sector. With these low figures, youth unemployment is an increasing challenge in Tanzania.
                            </p>
                            <p class="mb-4" style="text-align: justify;">
                                Over the years, entrepreneurship and innovation have created an opportunity for this category of the population to self-employ. For example, Tanzania has witnessed an explosion in the number of startups since 2009. According to study done by World Bank
                                2017, the number of new startups grew by 33%, and the potential for further growth and survival is immense.
                            </p>
                            <p class="mb-4" style="text-align: justify;">
                                At TSA we believe in leveraging innovation to create new business models to solve societal challenges. As an apex body for the startup's ecosystem in Tanzania, we are working with key stakeholders, policy, and decision-makers to create a conducive environment
                                for startups to flourish. We all have a role to play in facilitating the growth of startups in Tanzania. I am convinced startups will be game changers in Tanzania in the next ten years. The next generation of Tanzanian
                                millionaires will come from startups. I welcome you to join us on this exciting journey.
                            </p>
                            <div class="mt-3">
                                <h3>Paul Makanza</h3>
                                <span class="subheading">Chairman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt" id="interest">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-3 py-5">
                    <div class="heading-section ftco-animate">
                        <span class="subheading">Our Interest</span>
                        <h2 class="mb-4">Work With Us</h2>
                        <p style="text-align: justify;">
                            We work with public institutions, private companies, development partners, academia, hubs and investor networks, to foster,nurture and enhance the startup ecosystem in Tanzania.
                        </p>
                        <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Organization Deck</a></p> -->
                    </div>
                </div>
                <div class="col-lg-9 services-wrap px-4 pt-5">
                    <div class="row pt-md-3">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-auction"></span>
                                </div>
                                <div class="text">
                                    <h3>Advocacy</h3>
                                    <p style="text-align: justify;" class="mt-2">
                                        Advocating and lobbying for policies, laws, and regulatory frameworks that foster the growth of the startup ecosystem. </p>
                                </div>
                                <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
										class="ion-ios-arrow-round-forward"></span></a> -->
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><i class="fas fa-bullseye"></i></span>
                                </div>
                                <div class="text">
                                    <h3>Investment</h3>
                                    <p style="text-align: justify;" class="mt-2">
                                        Working with local international players in to accelerate the flow of capital investment opportunities to the ecosystem. </p>
                                </div>
                                <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
										class="ion-ios-arrow-round-forward"></span></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="row pt-md-3">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><i class="fa-solid fa-book"></i></span>
                                </div>
                                <div class="text">
                                    <h3>Insights</h3>
                                    <p style="text-align: justify;" class="mt-2">
                                        Producing data and information to help keep track of the ecosystem. </p>
                                </div>
                                <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
										class="ion-ios-arrow-round-forward"></span></a> -->
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-medal"></span>
                                </div>
                                <div class="text">
                                    <h3>Partnerships</h3>
                                    <p style="text-align: justify;" class="mt-2">
                                        We work with startup companies, government ministries and agencies, entrepreneurship support organisations, academia, capital providers, private sector associations, development partners, and the international community to advance our startup ecosystem.
                                    </p>
                                </div>
                                <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
										class="ion-ios-arrow-round-forward"></span></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container" style="margin-top: -10%;">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Latest Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-case owl-carousel ftco-owl">
                        <div class="item">
                            <div class="case img d-flex align-items-center justify-content-center" style="background-image: url({{asset('web/images/events/us_2.jpg')}});">
                                <div class="text text-center">
                                    <h3><a href="blog.html">TSA Meetings</a></h3>
                                    <span><a href="blog.html"  style="color: #fff;"> <br> VISIT FROM THE US AMBASSADOR</a> </span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="case img d-flex align-items-center justify-content-center" style="background-image: url({{asset('web/images/events/girls_2.jpg')}});">
                                <div class="text text-center">
                                    <h3><a href="blog.html">TSA CatchUps</a></h3>
                                    <span><a href="blog.html"  style="color: #fff;">TSA-GIRLS IN TECH <br>  COCKTAIL EVENT.</a> </span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="case img d-flex align-items-center justify-content-center" style="background-image: url({{asset('web/images/case-3.jpg')}});">
                                <div class="text text-center">
                                    <h3><a href="blog.html">TSA Forum</a></h3>
                                    <span> <a href="blog.html" style="color: #fff;">Open Public Forum <br>For Starups and SMEs.</a> </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <a href="blog.html">
                            <strong class="text-primary">Go to Page <i class="fas fa-forward"></i></strong>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb" id="mission">
        <div class="container" style="margin-top: -6%;">
            <div class="row justify-content-center mb-5 mt-4">
                <div class="col-md-10 text-center heading-section ftco-animate">

                    <h2 class="mb-4">Publication and Documentation</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url({{asset('web/images/annualReport.png')}});">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">latest publication</span>
                            <h2 class="mb-4">
                                CEO'S REPORT FOR THE PERIOD FROM JAN 2020 TO DEC 2021
                            </h2>

                            <div>
                                <a href="publication.html" class="btn btn-primary btn-block" target="_blank">go to Page<span class="icon icon-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Partners</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 text-center">
                    <div class="practice-area ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <a href="https://www.fondationbotnar.org/">
                                <img src="{{asset('web/images/partener/Botnar.png')}}" alt="Botnar" srcset="" style="width: 200px; ">
                            </a>
                        </div>
                        <a href="https://www.fondationbotnar.org/" class="btn-custom d-flex align-items-center justify-content-center">
                            <span class="position">BOTNAR</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="practice-area ftco-animate ">
                        <div class="icon d-flex justify-content-center align-items-center ">
                            <a href="https://www.cbe.ac.tz/">
                                <img src="{{asset('web/images/partener/CBE-logo.webp')}}" alt="CBE" style="height: 100px;" srcset="">
                            </a>
                        </div>
                        <a href="https://www.cbe.ac.tz/ " class="btn-custom d-flex align-items-center justify-content-center ">
                            <span class="position">CBE</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="practice-area ftco-animate ">
                        <div class="icon d-flex justify-content-center align-items-center ">
                            <a href="https://www.costech.or.tz/">
                                <img src="{{asset('web/images/partener/COSTECH.jpg')}}" alt="costech" style="height: 100px;" srcset="">
                            </a>
                        </div>
                        <a href="https://www.costech.or.tz/" class="btn-custom d-flex align-items-center justify-content-center ">
                            <span class="position">COSTECH</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="practice-area ftco-animate ">
                        <div class="icon d-flex justify-content-center align-items-center ">
                            <a href="https://www.ecovalleyadvisers.co.tz/">
                                <img src="{{asset('web/images/partener/ecovall.png')}}" alt="ecovalley" srcset="">
                            </a>
                        </div>
                        <a href="https://www.ecovalleyadvisers.co.tz/" class="btn-custom d-flex align-items-center justify-content-center ">
                            <span class="position">ECOVALLEY</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="practice-area ftco-animate ">
                        <div class="icon d-flex justify-content-center align-items-center ">
                            <a href="https://www.netherlandsandyou.nl/your-country-and-the-netherlands/tanzania/about-us">
                                <img src="{{asset('web/images/partener/netherlands.png')}}" alt="netherland" srcset="" style="width: 250px;">
                            </a>

                        </div>
                        <a href="https://www.netherlandsandyou.nl/your-country-and-the-netherlands/tanzania/about-us" class="btn-custom d-flex align-items-center justify-content-center ">
                            <span class="position">NETHERLAND</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="practice-area ftco-animate ">
                        <div class="icon d-flex justify-content-center align-items-center ">
                            <a href="https://www.segalfamilyfoundation.org/">
                                <img src="{{asset('web/images/partener/segal.jpg')}}" alt="Segal" srcset="" style="width: 200px; padding-top:50px; padding-bottom: 70px;">
                            </a>

                        </div>
                        <a href="https://www.segalfamilyfoundation.org/ " class="btn-custom d-flex align-items-center justify-content-center ">
                            <span class="position">SEGAL</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="practice-area ftco-animate ">
                        <div class="icon d-flex justify-content-center align-items-center ">
                            <a href="https://www.udsm.ac.tz/">
                                <img src="{{asset('web/images/partener/udsm.png')}}" alt="UDSM" style="width: 200px; height:120px; margin-left: 20px;" srcset="">
                            </a>
                        </div>
                        <a href="https://www.udsm.ac.tz/ " class="btn-custom d-flex align-items-center justify-content-center ">
                            <span class="position">UDSM</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@include('layouts.welcome.footer')
