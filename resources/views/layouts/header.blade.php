<div id="topbar" class="d-none d-lg-flex align-items-center top-bg">
    <div class=" d-flex">
        <div class="contact-info">
            <ul>
                <li> <i class="fa fa-envelope"></i> <a href="#">+1-206-335-0433</a></li>
                <li><i class="fa fa-phone"></i> <a href="mailto:contact@example.com">support@info.com</a></li>
                <!-- <li><i class="fa fa-clock"></i><span class="spectral-ft">Monday to Saturday 10:00 AM to 6:00 PM</span>
                </li>
                <li><input type="text" name="search" placeholder="Enter Keyword..."><i class="fa fa-search"></i></li> -->
            </ul>
        </div>
        <div class="social-links">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg  ">
    <div class="container">
        <div class="logo-imgs">
            <a class="navbar-brand" href="/"><img width="110" src="{{ asset('img/logo/logo5.png') }}"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  nev-nw {{ Request::segment(1) === 'welcome' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item nev-nw {{ Request::segment(1) === 'vessel' ? 'active' : '' }}">
                    <a class="nav-link" href="/vessel">The Vessel</a>
                </li>
                <li class="nav-item nev-nw">
                    <a class="nav-link" href="#">The Experience</a>
                </li>
                <li class="nav-item nev-nw ">
                    <a class="nav-link" href="#">The Crew</a>
                </li>
                <!-- <li class="nav-item nev-nw">
                    <a class="nav-link" href="#">Enquire</a>
                </li> -->
                <li class="nav-item ">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>