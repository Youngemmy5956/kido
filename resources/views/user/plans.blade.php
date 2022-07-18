@extends('layout.userdashboard')
@section('content')
            <div class="page-displayer">
                <div class="my-plan-container animate__animated animate__bounceInDown">
                    <header>
                        <p class="transaction-header">my plans</p>
                    </header>
                    <div class="info-container">
                        <p>plan</p>
                        <p>status</p>
                        <p>purchase date</p>
                        <p>expiry date</p>
                    </div>
                    <div class="my-plan-card-container">
                    @if(empty($history))
                        <center>No Data</center>
                    @else
                    @foreach($history as $hist)
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
                    @endforeach
                    @endif
                    </div>
                </div>
            </div> 
@endsection