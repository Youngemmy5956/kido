@extends('layout.userdashboard')

@section("wallet")
<x-user.wallet :approve="$approve" :address="$address"/>
@endsection

@section('content')
    <section>
        <div class="container mx-auto flex justify-center w-full my-4">
            <ul class="flex justify-between border md:space-x-4 space-x-2 w-11/12">
                <li class="md:p-6 p-2 tab w-4/12 text-center"><a href="#"><span class="fa fa-cart"></span>Coin Overview</a></li>
                <li class="md:p-6 p-2 tab w-4/12 text-center"><a href="#">Activation</a></li>
                <li class="md:p-6 p-2 tab w-4/12 text-center"><a href="#">Investment</a></li>
            </ul>
        </div>
          @if(session('msg'))
                <p class="ml-24 text-green-900">{{ session('msg') }}</p>
             @endif
         <div class="content container mx-auto flex w-10/12">
            <!-- tab content -->
                <div class="hidden tab-c w-full">
                    <!-- product -->
                    <x-user.product :coin="$coin"/>
                    <!-- end of product -->
                </div>

                <div class="hidden tab-c w-full">
                    <!-- Levels -->
                    <x-user.activation />
                    <!-- end of Levels -->
                </div>

                <div class="hidden tab-c w-full">
                    <!-- History -->
                    <x-user.history :invest="$investment"/>
                    <!-- end of history -->
                </div>
            <!-- end of tab content -->
        </div>
    </section>

    @endsection
