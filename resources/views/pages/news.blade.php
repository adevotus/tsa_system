@include('layouts.welcome.header')
 
@include('layouts.welcome.pagesnav')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 10%;">
                <span class="text-center text-primary"><h3 style="font-weight: bold; font-size:30px;">News</h3></span>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container" style="margin-top: -6%;">
            <div class="row justify-content-center">
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image: url({asset('web/images/book-tander.png')}});">
                        <a href="#">
                            <div class="text text-center" href="#">
                                <h3 class="text-primary " style="font-weight: 600 ">
                                    <a href="# ">COMMING SOON</a>
                                </h3>
                                <hr style="color: #fff; ">
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-md-4 ftco-animate ">
                    <div class="case img d-flex align-items-center justify-content-center " style="background-image: url({{asset('web/images/book-tander.png')}}); ">
                        <a href="# ">
                            <div class="text text-center " href="#">
                                <h3>
                                    <a href="#" style="font-weight: 600 ; font-size: 28px; ">STAY TUNED</a>
                                </h3>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>


    @include('layouts.welcome.footer')