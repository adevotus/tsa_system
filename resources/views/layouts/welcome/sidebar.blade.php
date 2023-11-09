  <!-- <div class="popup">
        <button id="close">&times;</button>
        <h4>Subscribe with TSA for updates</h4>
        <form class="form">
            <div class="form-group mb-2 col-lg-3 ">
                <label for="email" class="label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email@example.com">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Subscribe here</button>
        </form>

    </div> -->
    <script type="text/javascript">
        window.addEventListener("load", function() {
            setTimeout(
                function open(event) {
                    document.querySelector(".popup").style.display = "block";
                },
                2000
            )
        });
        document.querySelector("#close").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "none";
        });
    </script>
    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="text-align: center; color: #000; font-size: 24px;">
                <img src="{{asset('web/images/logo1.png')}}" style="width: 32px; height: 32px; float: left; color: #000;" /> TANZANIA
                <span style="color: #000;">Startup Association</span>
            </a>
            <button class="navbar-toggler" style="margin-right: 2%; color: #fff;" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{route('welcome')}}" class="nav-link">Home</a></li>
                    <li class="nav-item">
                        <a href="{{route('about_us')}}" class="nav-link">About us</a>
                    </li>

                    <li class="nav-item"><a href="{{route('events')}}" class="nav-link">Events</a></li>
                    <li class="nav-item">
                        <a href="{{route('membership')}}" class="nav-link">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('publications')}}" class="nav-link">Publication</a>
                    </li>

                    <li class="nav-item"><a href="{{route('news')}}" class="nav-link">News</a></li>

                    <li class="nav-item"><a href="{{route('contact_us')}}" class="nav-link">Contacts</a></li>
                    <li> <button class="btn btn-primary mt-2"> <a href="https://linktr.ee/tanzaniastartup" style="color: #fff; font-weight: 600;">Reach Out</a></button></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->