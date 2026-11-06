
    <div class="body-overlay" id="body-overlay"></div>
 <div class="topbar" style="
    background: #182140;
    text-align: center;
    color: white;
">
    Find Your Dream Property In Nepal
    
</div>
    <!-- navbar start --> 
    <div class="navbar-area" style="margin:10px 0">
        <nav class="navbar navbar-area navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-target="#realdeal_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="logo">
                    <a href="{{route('home')}}"><img style="     width:100px" src="{{ static_asset('assets/images/omegalogo.png') }}" alt="logo"></a> 
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="btn btn-yellow" href="{{route('consult')}}">Book A Consultation <span class="right"><i class="la la-plus"></i></span></a>
                </div>
                <div class="collapse navbar-collapse" id="realdeal_main_menu">
    <ul class="navbar-nav menu-open">

        <li class="current-menu-item">
            <a href="{{route('home')}}">Home</a>
        </li>

        <li>
            <a href="https://omegaadvisors.com.np/search">Properties</a>
        </li>

        <li>
            <a href="{{route('services')}}">Services</a>
        </li>

        <li>
            <a href="{{route('aboutus')}}">About Us</a>
        </li>

        <li>
            <a href="{{route('compliance')}}">Compliance</a>
        </li>

        <li>
            <a href="https://omegaadvisors.com.np/contact">Contact</a>
        </li>

    </ul>                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <a class="btn btn-yellow" href="{{route('consult')}}">Book A Consultation <span class="right"><i class="la la-plus"></i></span></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->