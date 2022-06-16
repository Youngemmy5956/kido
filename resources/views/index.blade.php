<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('asset/font/css/all.css') }}">
</head>
<body>
    <nav class="">
        <div class="container mx-auto flex justify-between py-6 px-3">
            <div>
                <p class="text-3xl font-bold">Grunion</p>
            </div>
            <div class="hidden md:block space-x-3">
                <a href="#">Fees</a>
                <a href="#">Learn</a>
                <a href="#">For Business</a>
                @auth
                     <a href="{{ route('dashboard') }}" class="bg-green-500 px-4 py-2 text-white">Dashboard</a>
                @endauth
                @guest
                <a href="{{ route('login') }}" class="border-2 border-sky-500 px-4 py-2">Login</a>
                <a href="{{ route('register') }}" class="bg-sky-500 px-4 py-2 text-white">Sign up</a>
                @endguest
            </div>
             <div class="md:hidden">
                <span class="fa fa-bars menu"></span>
               
            </div>

           
        </div>
         <div class="hidden md:hidden flex:col menuItem ml-4">
                <a href="#" class="block">Fees</a>
                <a href="#" class="block">Learn</a>
                <a href="#" class="block">For Business</a>
                @auth
                     <a href="{{ route('dashboard') }}" class="bg-green-500 w-4/12 text-center px-4 py-2 text-white block">Dashboard</a>
                @endauth
                @guest
                <a href="{{ route('login') }}" class="border-2 border-sky-500 w-4/12 text-center my-2 px-4 py-2 block">Login</a>
                <a href="{{ route('register') }}" class="bg-sky-500 px-4 py-2 w-4/12 text-center my-2 text-white block">Sign up</a>
                @endguest
        </div>
    </nav>
 <script>
                let menu = document.querySelector('.menu')
                let menuItem = document.querySelector('.menuItem')

                menu.addEventListener("click",function(){
                    menuItem.classList.toggle('hidden');
                })
            </script>
    <section>
        <div class="flex container mx-auto flex-col md:flex-row justify-between w-full">
            <div class="flex flex-col space-y-6 ml-6">
                <p class="text-5xl font-bold mt-20 w-8/12">Let your Crypto-Currency Work for you</p>
                <!-- <p>invest in Crypto-Currency by buying and selling goods with any coin of your choice,</p> -->
                <p>invest in Crypto-Currency and make a fortune for you and your family,</p>
                <!-- <p class="text-2xl w-8/12 font-bold">you buy the <span class="text-red-600 text-3xl">Goods</span>, you place the <span class="text-green-700 text-3xl">Order</span>, we sell it <span class="text-blue-700 text-3xl">Allover the world</span></p> -->
                <a class="bg-green-500 px-5 py-4 text-center text-white w-6/12 cursor-pointer hover:bg-white hover:border-2 hover:border-green-500 hover:text-green-500">Create an account</a>
            </div>
            <div>
                <img src="{{ asset('asset/index.png') }}" class="w-full h-2/12 ani">
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto flex flex-col-reverse md:flex-row px-3">
            <div class="flex justify-center md:w-6/12 w-full">
                <img src="{{ asset('asset/bitcoin.png') }}" height="400" width="400">
            </div>
            <div class="flex flex-col md:w-6/12 w-full  space-y-5 mx-2 md:mx-0">
                <p class="text-5xl font-bold">Accept Crypto and get paid in Crypto</p>
                <p>Receive funds directly to your crypto wallet with zero price volatility or risk.</p>
                <p>Get paid in Bitcoin, Ethereum, XRP, TRON and many more from anyone anywhere and get settlement instantly.</p>
            </div>
        </div>
    </section>

    <section class="mb-10">
        <div class="flex md:flex-row flex-col justify-center container mx-auto w-full">
            <div class="md:w-4/12 w-full flex flex-col items-center  md:space-y-4 space-y-8 mb-6 md:mb-0">
                <img src="{{ asset('asset/shield.png') }}" height="100" width="100">
                <p class="font-bold">Safe</p>
                <p class="text-center w-8/12">Everything is kept under military grade encryption from end-to-end 
                    keeping your digital assets safe when buying, selling or storing.</p>
            </div>
            <div class="md:w-4/12 w-full flex flex-col items-center md:space-y-4 space-y-8 mb-6 md:mb-0">
                <img src="{{ asset('asset/fast.png') }}" height="100" width="100">
                <p class="font-bold">Fast</p>
                <p class="text-center w-8/12">Built with latest and advanced technologies, Grunion is lightweight thus providing 
                    near instant buy and sell orders for newbies or seasoned traders.</p>
            </div>
            <div class="md:w-4/12 w-full flex flex-col items-center md:space-y-4 space-y-8 mb-6 md:mb-0">
                <img src="{{ asset('asset/reliable.png') }}" height="100" width="100">
                <p class="font-bold">Reliable</p>
                <p class="text-center w-8/12">We know how hectic life can be, managing your crypto shouldn't be, 
                    with a 99.99% uptime, Grunion is always operational most of the time.
                </p>
            </div>
        </div>
    </section>

     <section class="mb-10 bg-green-500 py-4 my-4">
         <h1 class="text-center text-white text-xl font-bold my-8">Heads Of Department</h1>
        <div class="flex md:flex-row flex-col justify-center container mx-auto w-full">
            <div class="md:w-4/12 w-full flex flex-col items-center  md:space-y-4 space-y-4 mb-2 md:mb-0">
                <img src="{{ asset('asset/clients/team-1.jpg') }}" loading="lazy" height="200" width="200" class="rounded-full border-8 border-white">
                <p class="font-bold">David Bent</p>
                <p class="text-center w-8/12 text-white">Security Engineer Manager</p>
            </div>
            <div class="md:w-4/12 w-full flex flex-col items-center md:space-y-4 space-y-4 mb-2 md:mb-0">
                <img src="{{ asset('asset/clients/team-2.jpg') }}" height=2100" width="200" class="rounded-full border-8 border-white"">
                <p class="font-bold">Kendra Lethem</p>
                <p class="text-center w-8/12 text-white">Head Of IT</p>
            </div>
            <div class="md:w-4/12 w-full flex flex-col items-center md:space-y-4 space-y-4 mb-2 md:mb-0">
                <img src="{{ asset('asset/clients/team-3.jpg') }}" height="200" width="200" class="rounded-full border-8 border-white"">
                <p class="font-bold">Neilands sellner</p>
                <p class="text-center w-8/12 text-white"> Senior Marketting Director</p>
            </div>
        </div>
     </section>

    <footer class="w-full h-12 bg-green-600 py-8">
            <div class="text-center">
                <p class="text-white">&copy; {{ date("Y") }} all right reserved </p>
            </div>
    </footer>
</body>
</html>