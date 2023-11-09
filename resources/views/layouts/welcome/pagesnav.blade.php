<nav class="navbar px-md-0 mb-5 navbar-expand-lg navbar-white ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
        <div class="container">
            <a class="navbar-brand" href="{{route('welcome')}}" style="text-align: center; color: #000; font-size: 24px;">
                <img src="{{asset('web/images/logo1.png')}}" style="width: 32px; height: 32px; float: left; color: #000;" /> TANZANIA
                <span style="color: #000;">Startup Association</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-primary"><a href="{{route('welcome')}}" class="nav-link text-dark">Home</a></li>

                    <li class="nav-item active"><a href="{{route('about_us')}}" class="nav-link text-dark">About us</a></li>
                    <li class="nav-item">
                        <a href="{{route('events')}}" class="nav-link text-dark">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('membership')}}" class="nav-link text-dark">Membership</a>
                    </li>

                    <li class="nav-item"><a href="{{route('publications')}}" class="nav-link text-dark">Publications</a></li>
                    <li class="nav-item"><a href="{{route('news')}}" class="nav-link text-dark">News</a></li>
                    <li class="nav-item"><a href="{{route('contact_us')}}" class="nav-link text-dark">Contact</a></li>
                    <li> <button class="btn btn-primary mt-2"> <a href="https://linktr.ee/tanzaniastartup" style="color: #fff; font-weight: 600;">Reach Out</a></button></li>


                </ul>
            </div>
        </div>
    </nav>