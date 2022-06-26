
@extends("web.layout.app")
@section('content')
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
                                <h2 class="bradcaump-title">About Market analysis</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">Market data</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js" class="particles-js"></div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Market Data  -->
        <section class="dg__market__data pt--130 pb--140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="market__title">
                            <h2>About Market Data</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                believable. There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form , by injected humour, or randomised words which don't
                                look even slightly believable. </p>
                        </div>
                        <div class="market__filter">
                            <div class="market__select">
                                <select>
                                    <option>Bitcoin (BTC)</option>
                                    <option>BUZZ (BUZZ)</option>
                                    <option>BVC (BVC)</option>
                                    <option>BXT (BXT)</option>
                                    <option>BXT (BXT)</option>
                                    <option>Bata (BTA)</option>
                                    <option>BTD (BTD)</option>
                                    <option>BTCRY (BTCRY)</option>
                                </select>
                            </div>
                            <div class="market__tab">
                                <div class="market__nav nav justify-content-center" role="tablist">
                                    <a class="nav-item nav-link" data-toggle="tab" href="#day" role="tab">Day</a>
                                    <a class="nav-item nav-link active" data-toggle="tab" href="#week" role="tab">Week</a>
                                    <a class="nav-item nav-link" data-toggle="tab" href="#month" role="tab">Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab__container">

                            <div class="sin__market__item tab-pane fade" id="day" role="tabpanel">
                                <div class="market__chart__map">
                                    <img src="{{asset('data/images/about/cart1.png')}}" alt="chart images">
                                </div>
                            </div>

                            <div class="sin__market__item tab-pane fade show active" id="week" role="tabpanel">
                                <div class="market__chart__map">
                                    <img src="{{asset('data/images/about/cart1.png')}}" alt="chart images">
                                </div>
                            </div>

                            <div class="sin__market__item tab-pane fade" id="month" role="tabpanel">
                                <div class="market__chart__map">
                                    <img src="{{asset('data/images/about/cart1.png')}}" alt="chart images">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Market Data  -->
        <!-- Start Ticker Area -->
        <section class="bg__ticker__ares tickets--2 bg__color--4">
            <div class="conteiner-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 right_border">
                        <div class="ticket">
                            <h6>Bitcoin -1BTC</h6>
                            <span>8190.65</span>
                            <p>1 XBT = 8,202.69 USD</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 right_border">
                        <div class="ticket">
                            <h6>Bitcoin -1BTC</h6>
                            <span>8190.65</span>
                            <p>1 XBT = 8,202.69 USD</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 right_border border-none">
                        <div class="ticket">
                            <h6>Bitcoin -1BTC</h6>
                            <span>8190.65</span>
                            <p>1 XBT = 8,202.69 USD</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 right_border">
                        <div class="ticket">
                            <h6>Bitcoin -1BTC</h6>
                            <span>8190.65</span>
                            <p>1 XBT = 8,202.69 USD</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 right_border">
                        <div class="ticket">
                            <h6>Bitcoin -1BTC</h6>
                            <span>8190.65</span>
                            <p>1 XBT = 8,202.69 USD</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 right_border">
                        <div class="ticket last">
                            <h6>Bitcoin -1BTC</h6>
                            <span>8190.65</span>
                            <p>1 XBT = 8,202.69 USD</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Ticker Area -->
        <!-- Start Market Table -->
        <div class="market__table bg--white pt--140 pb--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 table-responsive">
                        <table class="mkt__pre__list">
                            <thead>
                                <tr>
                                    <th class="market-no">
                                        <span class="nobr">#No</span>
                                    </th>
                                    <th class="market-symbol">Name & SYmble</th>
                                    <th class="market-prize">
                                        <span class="nobr">Price</span>
                                    </th>
                                    <th class="market-volume">
                                        <span class="nobr">Volume</span>
                                    </th>
                                    <th class="market-dat">
                                        <span class="nobr">%7day</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg__color">
                                <tr>
                                    <td class="market-no">#01</td>
                                    <td class="market-symbol">Bitcoin (BTC)</td>
                                    <td class="market-prize">$8,003.77</td>
                                    <td class="market-volume">$8,919,790,000</td>
                                    <td class="market-dat">-8.03%</td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td class="market-no">#02</td>
                                    <td class="market-symbol">Ethereum (ETH)</td>
                                    <td class="market-prize">$799.77</td>
                                    <td class="market-volume">$3,401,300,000</td>
                                    <td class="market-dat">-15.59%</td>
                                </tr>
                            </tbody>
                            <tbody class="bg__color">
                                <tr>
                                    <td class="market-no">#03</td>
                                    <td class="market-symbol">Ripple (XRP)</td>
                                    <td class="market-prize">$8,003.77</td>
                                    <td class="market-volume">$8,919,790,000</td>
                                    <td class="market-dat">-8.03%</td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td class="market-no">#04</td>
                                    <td class="market-symbol">Bitcoin Cash (BCH)</td>
                                    <td class="market-prize">$8,003.77</td>
                                    <td class="market-volume">$8,919,790,000</td>
                                    <td class="market-dat">-8.03%</td>
                                </tr>
                            </tbody>
                            <tbody class="bg__color">
                                <tr>
                                    <td class="market-no">#05</td>
                                    <td class="market-symbol">Bitcoin (BTC)</td>
                                    <td class="market-prize">$7,003.77</td>
                                    <td class="market-volume">$8,919,790,000</td>
                                    <td class="market-dat">-6.03%</td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td class="market-no">#06</td>
                                    <td class="market-symbol">Cardano (ADA)</td>
                                    <td class="market-prize">$8,003.77</td>
                                    <td class="market-volume">$8,919,790,000</td>
                                    <td class="market-dat">-8.03%</td>
                                </tr>
                            </tbody>

                            <tbody class="bg__color">
                                <tr>
                                    <td class="market-no">#07</td>
                                    <td class="market-symbol">Litecoin (LTC)</td>
                                    <td class="market-prize">$8,003.77</td>
                                    <td class="market-volume">$8,919,790,000</td>
                                    <td class="market-dat">-8.03%</td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td class="market-no">#08</td>
                                    <td class="market-symbol">Stellar (XML)</td>
                                    <td class="market-prize">$8,003.77</td>
                                    <td class="market-volume">$8,919,790,000</td>
                                    <td class="market-dat">-8.03%</td>
                                </tr>
                            </tbody>
                            <tbody class="bg__color">
                                <tr>
                                    <td class="market-no">#09</td>
                                    <td class="market-symbol">IOTA (MIOTA)</td>
                                    <td class="market-prize">$8,003.77</td>
                                    <td class="market-volume">$8,919,790,000</td>
                                    <td class="market-dat">-8.03%</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Market Table -->
        <!-- Start Video Area -->
        <section class="dg__video__area bg-image--8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dg__video__inner">
                            <h2>This Is a Parfect way to know about us</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                believable
                            </p>
                            <div class="play__video">
                                <a class="play__btn" href="https://www.youtube.com/watch?v=2X9eJF1nLiY">
                                    <img src="{{asset('data/images/about/play.png')}}" alt="play icon">Play Now</a>
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
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium,
                                totam aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium,
                                totam aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. There are
                                many variations passages Lorem Ipsum available, but the majority have suffered alteration
                                in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
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

        <!-- End Footer Area -->
    </div>
    <!-- Main wrapper -->

    <!-- JS Files -->
</body>



</html>

@endsection
