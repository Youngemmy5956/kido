@extends('layout.userdashboard')

@section('content')
            <!-- main body -->
            <div class="page-displayer">
                <div class="my-plan-container animate__animated animate__bounceInDown">
                    <header>
                        <p class="transaction-header">account ID</p>
                    </header>
                    <div class="tab">
                        <p>{{ substr(sha1(auth('web')->user()->email),0,10) }}</p>
                        <p>protected</p>
                    </div>
                </div> 
                <div class="my-plan-container animate__animated animate__bounceInDown">
                    <header>
                        <p class="transaction-header">email</p>
                    </header>
                    <div class="tab">
                        <p>{{ auth('web')->user()->email }}</p>
                        <p>edit</p>
                    </div>
                </div> 
                <div class="my-plan-container animate__animated animate__bounceInDown">
                    <header>
                        <p class="transaction-header">user name</p>
                    </header>
                    <div class="tab">
                        <p>{{ auth('web')->user()->first_name }}</p>
                        <p>edit</p>
                    </div>
                </div> 
                <div class="my-plan-container animate__animated animate__bounceInDown">
                    <header>
                        <p class="transaction-header"> wallet address</p>
                    </header>
                    <div class="tab">
                        <p>{{ substr(md5(auth('web')->user()->email),0,10) }}</p>
                        <p>copy</p>
                    </div>
                </div> 
            </div>
            <!-- end of page body -->
@endsection