@extends('web.layout.app')
@section('content')
<body>

    <!-- Main wrapper -->
    <div id="wrapper" class="wrapper">
        <!-- Header -->

        <!-- Header -->
        <!-- Start Slider Area -->
        <div class="dg__slider__area js-ripples slider--2 bg-image--3">
            <!-- Start Single Slide -->
           @include('web.home.fragments.slider')
            <!-- End Single Slide -->
        </div>
        <!-- End Slider Area -->
        <!-- Start Our Work Area -->
        @include('web.home.fragments.ourwork')
        <!-- End Our Work Area -->
        <!-- Start Live Chart -->
        @include('web.home.fragments.livechart')
        <!-- End Live Chart -->
        <!-- Start Working Process -->
        @include('web.home.fragments.workingprocess')
        <!-- End Working Process -->
        <!-- Start Counterup Area -->
        @include('web.home.fragments.counterup')
        <!-- End Counterup Area -->
        <!-- Start Converter Area -->
        @include('web.home.fragments.converter')
        <!-- End Converter Area -->
        <!-- Start Download Software Area -->
        @include('web.home.fragments.downloadsoftware')
        <!-- End Download Software Area -->
        <!-- Start Blog Area -->
        @include('web.home.fragments.blog')
        <!-- End Blog Area -->
        <!-- End Blog Area -->
        <div class="dgtaka__bottom">
            <!-- Start Banner Area -->

            <!-- End Banner Area -->

            <!-- Footer Area -->

            <!-- Footer Area -->
        </div>
    </div>
    <!-- Main wrapper -->
    @include('web.layout.includes.scripts')

    <!-- JS Files -->

</body>




</html>
@endsection
