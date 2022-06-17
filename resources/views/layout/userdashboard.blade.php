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
<body class="relative">
    <nav class="bg-green-500 text-white">
        <div class="container mx-auto flex justify-between py-6 px-3">
            <div>
                <a href="{{ route('index') }}" class="text-3xl font-bold">Bitool</a>
            </div>
            <div class="hidden md:block space-x-3 relative">
                <a href="#" class="border-2 border-white px-4 py-2" onClick="logout()">{{ auth('web')->user()->first_name }}</a>
                <script>
                    function logout(){
                        let log = document.querySelector(".log");
                        log.classList.toggle('hidden');
                    }
                </script>
                <div class="hidden left-0 absolute log bg-green-300 px-4 py-2 mt-2 text-black">
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                    <span class="fa fa-sign-out mx-2"></span><input type="submit" href="{{ route('logout') }}" value="Logout">
                    </form>
                </div>
                 <a href="{{ route('setting') }}" class="border-2 border-white px-4 py-2"><span class="fa fa-cog"></span></a>
            </div>
             <div class="md:hidden">
                <span class="fa fa-bars" onClick="bars()"></span>
            </div>
            <script>
                function bars(){
                    let bars = document.querySelector('.bars-data');
                    bars.classList.toggle('hidden')

                    console.log(bars.classList.contains('hidden') ? 'yes':'no')
                }   
            </script>
           
        </div>
    </nav>
     <div class="bars-data hidden ">
           <div class="flex flex-col bg-green-300">
               <a href="{{ route('setting') }}" class="block px-4 py-2"><span class="fa fa-user mx-2"></span>{{ auth('web')->user()->first_name }}</a>
                <a href="{{ route('setting') }}" class="block px-4 py-2"><span class="fa fa-cog mx-2"></span>Setting</a>
                <form action="{{ route('logout') }}" method="post" class="inline px-4 py-2">
                        @csrf
                    <span class="fa fa-sign-out mx-2"></span><input type="submit" name="submit" value="Logout">
                    </form>
           </div>
        </div>

    @yield("wallet")

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>