@include('layouts.welcome.header')
 
@include('layouts.welcome.pagesnav')
  
    <!-- END nav -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 10%;">
                <span class="text-center text-primary"><h3 style="font-weight: bold; font-size:30px;">Publication & Documentation</h3></span>
                <!-- <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, tempore corrupti? Provident perspiciatis alias explicabo. Optio tempora voluptate odit sit velit, animi consectetur, explicabo cumque laboriosam voluptatem quidem alias ea!</p> -->
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container" style="margin-top: -6%;">
            <div class="row justify-content-center">
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image: url({{asset('web/images/book-tander.png')}});">
                        <a href="./publication/publication_1.html">
                            <div class="text text-center" href="./publication/publication_1.html">
                                <h3 class="text-primary " style="font-weight: 600 "><a href="./publication/publication_1.html ">Publications</a></h3>
                                <hr style="color: #fff; ">
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-md-4 ftco-animate ">
                    <div class="case img d-flex align-items-center justify-content-center " style="background-image: url({{asset('web/images/book-tander.png')}}); ">
                        <a href="./publication/report.html ">
                            <div class="text text-center " href="./publication/report.html ">
                                <h3><a href="./publication/report.html " style="font-weight: 600 ; font-size: 28px; ">Reports</a></h3>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>


    @include('layouts.welcome.footer')