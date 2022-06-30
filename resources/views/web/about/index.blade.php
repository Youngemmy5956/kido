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
                                    <a class="breadcrumb-item" href="">Home</a>
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
                            <h3 class="section__title--4">About Koinbetter & its Future</h3>
                            <p>
                                Become a better earner in all form of cryptocurrency with KOINBETTER.
                                This is a profitable trading firm, That beats all odds of how volatile the crypto market is. That’s to say it give you the full standards of Crypto market, with an insurance and assurance of your profits. Koinbetter had given her investors a the right for private fund that invests primarily in forex, crypto currencies and their derivatives. In other words, very profitable ventures. Thanks to this method we are allowed to provide our investors with hourly accruals. </p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 col-sm-12 col-md-12 sm__mt--40 md__mt--40">
                        <div class="dg__secure__thumb">
                            <img src="{{asset('data/images/about/j2.png')}}" alt="secure images">
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
                            <p>KOINBETTER IS A RISK-FREE CRYPTO TRADING AND CLOUD MINING COMPANY
                                We help you to achieve your dreams and to live to your expectations. The business
                                operating system has been precisely engineered to ensure fair and instant revenue
                                distributions to all her investors.</p>
                            <div class="play__video">
                                <a class="play__btn" href="https://www.youtube.com/watch?v=2X9eJF1nLiY"><img
                                        src="{{ asset('data/images/about/play.png') }}" alt="play icon">Play Now</a>
                            </div>
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
                            <div style="height: 540px;">
                                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                <script type="text/javascript">
                                new TradingView.widget(
                                {
                                "autosize": true,
                                "symbol": "COINBASE:BTCUSD",
                                "interval": "240",
                                "timezone": "Etc/UTC",
                                "theme": "light",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_09e24"
                               }
                                );
                                </script>
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6 offset-xl-1 col-md-12 col-sm-12 col-12 sm__mt--40 md__mt--40">
                        <div class="service__inner">
                            <h3 class="section__title--4">Best Services from us.</h3>
                                <p>The main activity of our company is arbitration in the cryptocurrency market. We buy a
                                    cryptocurrency asset on a exchange with a minimum price and sell it on another exchange
                                    at a high price, making profit from the difference between prices. Having a deposit on
                                    most major cryptocurrency exchanges, we are given the opportunity to choose the most
                                    advantageous offers for buying and selling cryptocurrencies. KOINBETTER.COM We have
                                    developed special software - Matic Engine™, which performs such an operation in an
                                    automatic mode in a second, so we bypass the volatility risk inherent in
                                    cryptocurrencies. It is practically not possible for one trader to have active deposits
                                    on the maximum number of exchanges in order to choose the most favorable price
                                    conditions. etrades-fx.net, thanks to local partners around the world, has accounts in
                                    various cryptocurrency exchanges. We are constantly adding new exchanges, attracting new
                                    local partners.</p>
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
