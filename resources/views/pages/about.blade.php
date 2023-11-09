
@include('layouts.welcome.header')

@include('layouts.welcome.pagesnav')

    <!-- END nav -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 10%;">
                <span class="text-center text-primary"><h3 style="font-weight: bold; font-size:30px;">About Us</h3></span>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class=" img img-video d-flex img-responsive imag align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url({{asset('web/images/about.jpg')}}); margin-top: 10%; border-radius: 10px;">
                        <!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="icon-play"></span>
                        </a> -->
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Tanzania StartUp Association</span>
                            <h2 class="mb-4">Nurturing a Stronger Startup Ecosystem in Tanzania.</h2>
                            <div class="tabulation-2 mt-4">
                                <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                    <li class="nav-item mb-md-0 mb-2">
                                        <a class="nav-link active py-2" data-toggle="tab" href="#home1"> Mission</a>
                                    </li>
                                    <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                        <a class="nav-link py-2" data-toggle="tab" href="#home2"> Vision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3"> Value</a>
                                    </li>
                                </ul>
                                <div class="tab-content bg-light rounded mt-2">
                                    <div class="tab-pane container p-0 active" id="home1">
                                        <p>To facilitate, organize and mobilize Tanzania’s startup ecosystem and stakeholders to advocate and lobby for the improvement of policy, legal and regulatory environments that support the growth, competitiveness,
                                            and sustainability of startups and social enterprises in Tanzania.</p>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="home2">
                                        <p>A Tanzania with a conducive legal and regulatory business environment that facilitates and supports the growth and sustainability of the start-up ecosystem.
                                        </p>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="home3">
                                        <p>We believe in Tanzania's policies and actions with an impact-oriented approach toward Tanzania's Startup Ecosystem.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="tabulation-2 mt-4">
                                <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                    <li class="nav-item mb-md-0 mb-2">
                                        <a class="nav-link active py-2" data-toggle="tab" href="#disruptive">Disruptive</a>
                                    </li>
                                    <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                        <a class="nav-link py-2" data-toggle="tab" href="#sustainability">Sustainability</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#partnership">Partnerships</a>
                                    </li>
                                </ul>
                                <div class="tab-content bg-light rounded mt-2">
                                    <div class="tab-pane container p-0 active" id="disruptive">
                                        <p> We believe in leveraging innovation that comes up with disruptive solutions and business models which create value to society at large.</p>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="sustainability">
                                        <p>We believe in developing a progressive set of relations for Tanzania's Startup Ecosystem that ensures sustainable growth and impact.
                                        </p>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="partnership">
                                        <p>We believe in building progressive collaborations and cooperation between Tanzania's Startup Ecosystem, Stakeholders Community, and Tanzania's Government.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mt-4 justify-content-center bg-primary py-2 px-2 text-center" style="color:#fff; border-radius: 5px;"><span style="font-size: 20px; font-weight:800">Since 2021</span></div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="ftco-section testimony-section" id="manage">
        <div class="container" style="margin-top: -7%;">
            <div class="row justify-content-center mt-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Board Members</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Mr.Paul is a non-executive chairman for Tanzania Cigarette Co. Ltd. He is an expert in Business Planning, Corporate Finance, Entrepreneurship and Strategic Planning.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('web/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Paul Makanza</p>
                                            <span class="position">Chairman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Ms. Lulu is the CEO of Legal Services Facility (LSF). She is a lawyer and an expert in leadership, youths, gender, public policy and development programs.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('web/images/person_2.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Lulu Ngwanakilala</p>
                                            <span class="position">Vice Chairperson</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Mr. Zahoro Muhaji is the founder of TSA. He is a serial entrepreneur with 13 years of experience in establishing, leading and managing businesses across different sectors.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('web/images/zahoroceo.JPG')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Zahoro Muhaji</p>
                                            <span class="position">Chief Executive Officer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Ms. Faith is the Head of Mobile Financial Services at Millicom (Tigo). She has vast experience working with corporates and startups on digital financial solutions.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('web/images/person_4.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Faith Pella</p>
                                            <span class="position">Board Member</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Mr. Jumanne Mtambalike is a CEO and Founder of Sahara Ventures group of companies. He has vast experience in innovation and technology entrepreneurship.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('web/images/person_5.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Jumanne Mtambalike</p>
                                            <span class="position">Board Member</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Mr. Mike Mushi is the Founder of Jamii Forums. He is a serial internet entrepreneur passionate about solving problems using technology and entrepreneurial approaches.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('web/images/person_6.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Mike Mushi</p>
                                            <span class="position">Board Member</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Ms. Tunu is the Chief Strategy Officer (CSO) of CSI Energy Group headquartered in Mauritius. She is an expert in driving strategy, transformation and performance.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_7.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Tunu Kinabo</p>
                                            <span class="position">Board Member</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Mr , Amb .Togolani is experienced civil servant with hands on experience on government, diplomacy, public policy and communication. He is the Private Secretary to the former President H.E Dr. Jakaya Kikwete.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('web/images/person_8.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Togolani Mavura</p>
                                            <span class="position">Board Member</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.welcome.footer')