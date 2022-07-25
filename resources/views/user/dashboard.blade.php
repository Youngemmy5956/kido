@extends('layout.userdashboard')

@section('content')
            <div class="page-displayer">
                <p class="header">overview</p>

        @if(!empty($overview))
        <div class=" overview-container animate__animated animate__bounceInDown">
            <div class="overview-card">
                <h2>Invested (USD)</h2>
                <p>{{ $overview->amount }}</p>
            </div>
            <div class="overview-card">
                <h2>Active Plan ({{ $overview->plan }})</h2>
                <p>{{ $overview->plan }}</p>
            </div>
            <div class="overview-card">
                <h2>ROI</h2>
                <p>{{ $overview->roi }}</p>
            </div>
            <div class="overview-card">
                <h2>ROI (USD)</h2>
                <p>{{ $overview->roi }}</p>
            </div>
        </div>
        @else
        <div class=" overview-container animate__animated animate__bounceInDown">
            <div class="overview-card">
                <h2>Invested (USD)</h2>
                <p>$0.00</p>
            </div>
            <div class="overview-card">
                <h2>Active Plan ()</h2>
                <p>$0.00</p>
            </div>
            <div class="overview-card">
                <h2>ROI</h2>
                <p>%0.00</p>
            </div>
            <div class="overview-card">
                <h2>ROI (USD)</h2>
                <p>%0.00</p>
            </div>
        </div>
        @endif



        <div class="start-mining-container animate__animated animate__bounceInUp">
            <header>
                <p>Active Plan</p>
                    <p class="upgrade">upgrade</p>
            </header>

            <div class="mining-info">
                <div class="mining-plans">
                    <div class="mining-plan-text-container">
                        <p> [Balance USD]</p>
                        <h2>You are on daily investment plan</h2>
                        <h4 class="amount">$50000</h4>
                        <button class="reset-plan-btn">Upgrade Plan</button>
                    </div>
                    <img src="" alt="">
                </div>
                <div class="want-to-earn-more">

                    <h3>want to earn more ?</h3>
                    <p>upgrade your plan and step up your earns even up to 10% interest per day </p>
                    <button class="update-plan-btn">upgrade now</button>
                </div>
            </div>
            <div class="my-plan-container">
                <header>
                    <p>my plans</p>
                </header>
                <div class="info-container">
                    <p>plan</p>
                    <p>status</p>
                    <p>purchase date</p>
                    <p>expiry date</p>
                </div>

                    @if(empty($history))
                        <center>No Data</center>
                    @else
                    @foreach($history as $hist)
                    <div class="my-plan-card-container">
                    <div class="my-plan-card">
                        <p>{{ $hist->plan }}</p>


                    </div>
                    <div class="my-plan-card">
                        {!! $hist->status ? '<p>active </p>':'<p class="disabled">active </p>' !!}

                    </div>
                    <div class="my-plan-card">
                        <p class="date">
                            {{ $hist->purchase_date }}
                        </p>

                    </div>
                    <div class="my-plan-card">
                        <p class="date">
                            {{ $hist->expiry_date }}
                        </p>

                    </div>
                     </div>
                    @endforeach
                    @endif

            </div>
        </div>
            </div>
@endsection
