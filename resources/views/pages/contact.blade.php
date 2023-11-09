@include('layouts.welcome.header')

@include('layouts.welcome.pagesnav')
    <!-- END nav -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 10%;">
                <span class="text-center text-primary"><h3 style="font-weight: bold; font-size:30px;">Contact Us</h3></span>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h3">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span class="icon icon-map-marker" style="color: #000;font-size: 20px;"></span> 9th Floor, TAN House Tower,<br>
                        Plot 34/1 - Ursino South, New Bagamoyo Road,
                        <br>Dar es Salaam,Tanzania.</p>
                </div>
                <div class="col-md-3">
                    <!-- <p> <a href="tel://1234567920"><span class="icon icon-phone" style="color: #000; font-size: 20px;"></span></a></p> -->
                </div>
                <div class="col-md-3">
                    <p><a href="mailto:info@tsa.co.tz"><span class="icon icon-envelope" style="color: #000; font-size:20px;"></span> info@tsa.co.tz</a></p>
                </div>
                <div class="col-md-3">
                    <p>
                        <a href="#"><span class="icon icon-link" style="color: #000; font-size:20px;"></span> tsa.co.tz</a>
                    </p>
                </div>
            </div>
            <div class="row block-9 no-gutters">
                <div class="col-lg-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-lg-6  col-md-12 d-flex">


                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.927610864116!2d39.25230507514555!3d-6.77866496629141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c1591302ab3%3A0x7e86469139133804!2sTan%20House!5e0!3m2!1sen!2stz!4v1695337596918!5m2!1sen!2stz"
                     width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                


                </div>
            </div>
        </div>
    </section>



    @include('layouts.welcome.footer')