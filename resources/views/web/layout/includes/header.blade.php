<header id="header" class="dg__header header--absolute space-right-left">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 col-xl-2 col-sm-6 col-12">
                <div class="logo">
                    <a href="{{route("index")}}">
                        <img src="{{asset('data/images/logo/ki4.png')}}" alt="logo images">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="mainmenu">
                        <li class="drop">
                            <a href="{{route("index")}}">Home</a>
                            <ul class="dropdown">
                                {{-- <li>
                                    <a href="{{route("web.home")}}">Home Version 01</a>
                                </li> --}}
                                {{-- <li>
                                    <a href="{{route("web.home")}}">Home Version 02</a>
                                </li> --}}
                                {{-- <li>
                                    <a href="{{route("web.home")}}">Home Version 03</a>
                                </li> --}}
                                {{-- <li>
                                    <a href="{{route("web.home")}}">Home Version 04</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="{{route("about")}}">About Us</a>
                        </li>
                        <li class="drop">
                            <a href="{{route("service")}}">Service</a>
                            <ul class="dropdown">
                                {{-- <li>
                                    <a href="{{route("web.service")}}">Service Page</a>
                                </li> --}}
                                {{-- <li>
                                    <a href="single-service.html">Single Service</a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="merchants.html">Merchants</a>
                        </li> --}}
                        {{-- <li class="drop">
                            <a href="blog.html">News</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="blog.html">Blog Page</a>
                                </li>
                                <li>
                                    <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="drop">
                            <a href="{{route("team")}}">team</a>
                            {{-- <li>
                                <a href="{{route("web.about_btc")}}">About Coin</a>
                            </li> --}}
                            <li>
                                <a href="{{route("wallet")}}">Wallet Page</a>
                            </li>
                            {{-- <ul class="dropdown">
                                <li>
                                    <a href="about-bitcoin.html">About Bitcoin</a>
                                </li>
                                <li>
                                    <a href="merchants.html">Merchants</a>
                                </li>
                                <li>
                                    <a href="team.html">Team Page</a>
                                </li>
                                <li>
                                    <a href="wallet.html">Wallet Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{route("contact")}}">Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-xl-2 col-sm-6 col-12">
                <ul class="accounts">
                    <li>
                        <a href="{{route("login")}}">Log in</a>
                    </li>
                    <li class="active">
                        <a href="{{route("register")}}">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 d-none">
            <nav class="mobilemenu__nav">
                <ul class="meninmenu">
                    <li>
                        <a href="{{route("index")}}">Home</a>
                        {{-- <ul>
                            <li>
                                <a href="index.html">Home Version 01</a>
                            </li>
                            <li>
                                <a href="index-2.html">Home Version 02</a>
                            </li>
                            <li>
                                <a href="index-3.html">Home Version 03</a>
                            </li>
                            <li>
                                <a href="index-4.html">Home Version 04</a>
                            </li>
                        </ul> --}}
                    </li>
                    <li>
                        <a href="{{route("about")}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{route("service")}}">Service</a>
                        {{-- <ul>
                            <li>
                                <a href="service.html">Service Page</a>
                            </li>
                            <li>
                                <a href="single-service.html">Single Service</a>
                            </li>
                        </ul> --}}
                    </li>
                    {{-- <li>
                        <a href="merchants.html">Merchants</a>
                    </li> --}}
                    {{-- <li>
                        <a href="blog.html">News</a>
                        <ul>
                            <li>
                                <a href="blog.html">Blog Page</a>
                            </li>
                      li      <li>
                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                            </li>
                            <li>
                                <a href="blog-details.html">Blog Details</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="{{route("team")}}">Team</a>
                        {{-- <li>
                            <a href="{{route("web.about_btc")}}">About Coin</a>
                        </li> --}}
                        <li>
                            <a href="{{route("wallet")}}">Wallet Page</a>
                        </li>


                        {{-- <ul>
                            <li>
                                <a href="about-bitcoin.html">About Bitcoin</a>
                            </li>
                            <li>
                                <a href="merchants.html">Merchants</a>
                            </li>
                            <li>
                                <a href="team.html">Team Page</a>
                            </li>
                            <li>
                                <a href="wallet.html">Wallet Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                        </ul> --}}
                    </li>
                    <li>
                        <a href="{{route("contact")}}">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="mobile-menu d-block d-lg-none"></div>
    <!-- Mobile Menu -->
</header>

