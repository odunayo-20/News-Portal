 <div class="navbar-area">
        <!-- topbar end-->
        <div class="topbar-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-7 align-self-center">
                        <div class="topbar-menu text-md-left text-center">
                            <ul class="align-self-center">
                                <li><a href="#">Author</a></li>
                                <li><a href="#">Advertisment</a></li>
                                <li><a href="#">Member</a></li>
                                <li><a href="{{ route('sitemap.html') }}">Sitemap</a></li>
                                <div class="mb-4">
    {{-- <h3>XML Sitemap</h3>
    <p>For search engines: <a href="{{ url('/sitemap.xml') }}">{{ url('/sitemap.xml') }}</a></p>
</div> --}}

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 mt-2 mt-md-0 text-md-right text-center">
                        <div class="topbar-social">
                            <div class="topbar-date d-none d-lg-inline-block"><i class="fa fa-calendar"></i> Saturday, October 7</div>
                            <ul class="social-area social-area-2">
                                <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube-icon" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="google-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar end-->

        <!-- adbar end-->
        <div class="adbar-area bg-black d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 align-self-center">
                        <div class="logo text-md-left text-center">
                            <a class="main-logo" href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="img"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 text-md-right text-center">
                        <a href="#" class="adbar-right">
                            <img src="{{ asset('frontend/assets/img/add/1.png') }}" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- adbar end-->

        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="img"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="nextpage_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="current-menu-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="{{ route('trends') }}">Trending News</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="{{ route('category') }}">Category</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="{{ route('news.grid') }}">News Grid</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <div class="menu-search-inner">
                        <input type="text" placeholder="Search For">
                        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
