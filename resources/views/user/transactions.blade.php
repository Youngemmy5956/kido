@extends('layout.userdashboard')
@section('content')
                    <div class="page-displayer">
                        <div class="my-plan-container animate__animated animate__bounceInDown">
                            <header>
                                <p class="transaction-header">my plans</p>
                            </header>
                            <div class="info-container">
                                <p>amount (usdt)</p>
                                <p>status</p>
                                <p>transaction date</p>
                                <p>agent in charge</p>
                            </div>
                            <div class="my-plan-card-container">
                                @if(empty($await))
                                    <center>No date </center>
                                @else
                                @foreach($await as $awaiting)
                                <div class="my-plan-card">
                                    <p>{{ $awaiting->amount }}</p>
                                </div>
                                <div class="my-plan-card">
                                    <p class="{{ $awaiting->status == 'pending' ? 'error':'success' }}"> {{ $awaiting->status }}</p>
                                </div>
                                <div class="my-plan-card">
                                    <p class="date">
                                        {{ $awaiting->transaction_date}}
                                    </p>

                                </div>
                                <div class="my-plan-card">
                                    <p >{{ $awaiting->agent }}</p>

                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="my-plan-container animate__animated animate__bounceInUp">
                        <header>
                            <p class="transaction-header">my withdraws</p>
                        </header>
                        <div class="transaction-withdraw-panel">
                            @if(session('msg'))
                                <p>{!! session('msg') !!}</p>
                            @endif
                            <!-- <p>min <span  class="pink-text"> 10,000</span> shiba max <span  class="pink-text"> 1,000,000</span>shiba</p> -->
                            <form class="input-container" action="{{ route('user.transaction') }}" method="post">
                            @csrf
                            <div class="input-container">
                                <input type="text" placeholder="Enter Wallet Address" name="wallet">
                            </div>
                            <button type="submit" class="buy-now">Withdraw</button>
                            </form>
                        </div>
                    </div>
                    <div class="my-plan-container animate__animated animate__bounceInUp">
                        <header>
                            <p class="transaction-header">my transactions</p>
                        </header>
                        <div class="info-container">
                            <p>amount</p>
                            <p>status</p>
                            <p>purchase date</p>
                            <p>expiry date</p>
                        </div>
                        <div class="my-plan-card-container ">
                            <!--
                            <div class="my-plan-card">
                                <p >0.34758445 shib</p>
                                <p >0.34758445 shib</p>
                                <p >0.34758445 shib</p>
                                <p >0.34758445 shib</p>
                                <p >0.34758445 shib</p>
                                <p >0.34758445 shib</p>
                            </div>
                            <div class="my-plan-card">
                                <p class="date">
                                    paid
                                </p>
                                <p class="date">
                                    paid
                                </p>
                                <p class="date">
                                    paid
                                </p>
                                <p class="date">
                                    paid
                                </p>
                                <p class="date">
                                    paid
                                </p>
                                <p class="date">
                                    paid
                                </p>
                            </div>
                            <div class="my-plan-card animate__animated animate__bounceInUp">
                                <p class="date">
                                    2022/09/04 03:20:67
                                </p>
                                <p class="date">
                                    2022/09/04 03:20:67
                                </p>
                                <p class="date">
                                    2022/09/04 03:20:67
                                </p>
                                <p class="date">
                                    2022/09/04 03:20:67
                                </p>
                                <p class="date">
                                    2022/09/04 03:20:67
                                </p>
                                <p class="date">
                                    2022/09/04 03:20:67
                                </p>
                            </div>
                            <div class="my-plan-card">

                                <p>at3446djg4jy5f643hjdd</p>
                                <p>at3446djg4jy5f643hjdd</p>
                                <p>at3446djg4jy5f643hjdd</p>
                                <p>at3446djg4jy5f643hjdd</p>
                                <p>at3446djg4jy5f643hjdd</p>
                                <p>at3446djg4jy5f643hjdd</p>
                            </div>
                            -->
                        </div>
                    </div>
    @endsection
