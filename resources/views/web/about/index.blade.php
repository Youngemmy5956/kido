@extends("web.layout.app")
@section("content")

<body>
    <!-- Main wrapper -->
    <div id="wrapper" class="wrapper">
        <!-- Header -->

        <!-- Header -->
        <!-- Start Bradcaump area -->
        <div id="bread__image" class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">About Us</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">About Us</span>
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
        <section class="about__dgtaka about--2 section-padding--xl">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12 col-sm-12 col-md-12">
                        <div class="dg__secure__inner">
                            <h3 class="section__title--4">About DGTAKA & its Future</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. </p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 col-sm-12 col-md-12 sm__mt--40 md__mt--40">
                        <div class="dg__secure__thumb">
                            <img src="{{asset('data/images/about/6.png')}}" alt="secure images">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Secure Transaction Area -->
        <!-- Start Video Area -->
        <section class="dg__video__area bg-image--8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dg__video__inner">
                            <h2>This Is a Parfect way to know about us</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable</p>
                            <div class="play__video">
                                <a class="play__btn" href="https://www.youtube.com/watch?v=2X9eJF1nLiY"><img
                                        src="{{asset('data/images/about/play.png')}}" alt="play icon">Play Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Video Area -->
        <!-- Start Service Area -->
        <section class="dg__service__area bg--white padding--hor">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="service__chart">
                            <div class="thumb">
                                <img src="{{asset('data/images/about/service.png')}}" alt="chart">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6 offset-xl-1 col-md-12 col-sm-12 col-12 sm__mt--40 md__mt--40">
                        <div class="service__inner">
                            <h3 class="section__title--4">Best Services from us.</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque
                                laudantium, totam aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque
                                laudantium, totam aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur. There are many variations passages Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
        <!-- Start Footer Area -->
        <div class="dgtaka__bottom">
            <!-- Start Banner Area -->

            <!-- End Banner Area -->

            <!-- Footer Area -->

            <!-- Footer Area -->
        </div>
        <!-- End Footer Area -->
    </div>
    <!-- Main wrapper -->

    <!-- JS Files -->
</body>



</html>

@endsection
