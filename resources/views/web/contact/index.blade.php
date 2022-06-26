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
                                <h2 class="bradcaump-title">Contact With us</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Home</a>
                                    <span class="brd-separetor">/</span>
                                    <span class="breadcrumb-item active">wallet</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js" class="particles-js"></div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="conact__area pt--140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__title">
                            <img src="{{asset('data/images/about/contact.png')}}" alt="conatct images">
                            <h2>Get Dgtaka where you need !</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="google__map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 sm__mt--40 md__mt--40">
                        <div class="dg__contact__wrapper">
                            <form id="contact-form" class="contact-form" action="https://try.htmldemo.net/dgtaka/mail.php" method="post">
                                <div class="single-contact-form">
                                    <span>Full Name</span>
                                    <input type="text" name="firstname">
                                </div>
                                <div class="single-contact-form">
                                    <span>Email</span>
                                    <input type="email" name="email">
                                </div>
                                <div class="single-contact-form">
                                    <span>Subject</span>
                                    <input type="text" name="subject">
                                </div>
                                <div class="single-contact-form message">
                                    <span>Message</span>
                                    <textarea name="message"></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit">Submit
                                        <span class="ti-arrow-right"></span>
                                    </button>
                                </div>
                            </form>



                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
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

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(-34.397, 150.644), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [

                    {
                        "featureType": "all",
                        "elementType": "all",
                        "stylers": [{
                                "invert_lightness": true
                            },
                            {
                                "saturation": 10
                            },
                            {
                                "lightness": 30
                            },
                            {
                                "gamma": 0.5
                            },
                            {
                                "hue": "#004fb6"
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-34.397, 150.644),
                map: map,
                title: 'Dcare!',
                animation: google.maps.Animation.BOUNCE

            });
        }
    </script>


    <script src="{{asset('data/js/active.js')}}"></script>
</body>



</html>


@endsection
