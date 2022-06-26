@extends('web.layout.app')
@section('content')

<body>

    <!-- Main wrapper -->
    <div id="wrapper" class="wrapper">
        <!-- Header -->
        @include('web.layout.includes.header')
        <!-- Header -->
        <!-- Start Bradcaump area -->
        <div id="bread__image" class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Services We Provide</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">Service</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js" class="particles-js"></div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Secure Transaction Area -->
        <section class="about__dgtaka about--2 pt--140 pb--130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="dg__secure__inner">
                            <h3 class="section__title--4">World Best Cryptocurrency</h3>
                            <p>Our investment platform is a product of careful preparation and fruitful work of experts in the field of Bitcoin mining, highly profitable trade in cryptocurrencies and online marketing. Using modern methods of doing business and a personal approach to each client, we offer a unique investment model to people who want to use Bitcoin not only as a method of payment, but also as a reliable source of stable income. KOINBETTER  uses only modern mining equipment and trades at the most stable markets, which minimizes the risk of financial loss to customers and guarantees them a stable income accrued every calendar day.</p>
                            <p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 sm__mt--40 md__mt--40">
                        <div class="dg__secure__thumb">
                            <img src="{{asset('data/images/about/6.png')}}" alt="secure images">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Secure Transaction Area -->
        <!-- Start Service Area  -->
        <section class="dg__service__area pb--140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title--6">
                            <h2>Our Services</h2>
                            <p>KOINBETTER a cryptocurrency partners which has been I identified with the test of time, thoroughly over the past 5 years and they are the most dynamically developing institutional firm in the cryptocurrency assets, the firm taking it stand as a mandate before 2025,to become the next global giant in the circulation market.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space__dec">
                <div class="custom__service__width">
                    <!-- Start Single Service -->
                    <div class="service__2">
                        <div class="icon">
                            <img src="{{asset('data/images/service/icon/1.png')}}" alt="service icon">
                        </div>
                        <div class="content">
                            <h4>
                                <a href="single-service.html">Safe Service</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="service__2">
                        <div class="icon">
                            <img src="{{asset('data/images/service/icon/2.png')}}" alt="service icon">
                        </div>
                        <div class="content">
                            <h4>
                                <a href="single-service.html">First Transfer</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="service__2">
                        <div class="icon">
                            <img src="{{asset('data/images/service/icon/3.png')}}" alt="service icon">
                        </div>
                        <div class="content">
                            <h4>
                                <a href="single-service.html">First Transfer</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="custom__service__width">
                    <!-- Start Single Service -->
                    <div class="service__2">
                        <div class="icon">
                            <img src="{{asset('data/images/service/icon/4.png')}}" alt="service icon">
                        </div>
                        <div class="content">
                            <h4>
                                <a href="single-service.html">Online SHopping</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="service__2">
                        <div class="icon">
                            <img src="{{asset('data/images/service/icon/5.png')}}" alt="service icon">
                        </div>
                        <div class="content">
                            <h4>
                                <a href="single-service.html">Phone Support</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="service__2">
                        <div class="icon">
                            <img src="{{asset('data/images/service/icon/6.png')}}" alt="service icon">
                        </div>
                        <div class="content">
                            <h4>
                                <a href="single-service.html">Local Bank Conncetion</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </section>
        <!-- End Service Area  -->
        <!-- Start Footer Area -->
        <div class="dgtaka__bottom">
            <!-- Start Banner Area -->

            <!-- End Banner Area -->

            <!-- Footer Area -->

        <!-- End Footer Area -->
    </div>
    <!-- Main wrapper -->

    <!-- JS Files -->
</body>



</html>


@endsection
