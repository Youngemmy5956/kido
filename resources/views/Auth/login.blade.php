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
   <section class="w-full h-full">
    
       <div class="w-full flex flex-col items-center justify-center h-full mt-19">
             <img src="{{ asset('data/images/kl1.png') }}" class="my-10">
            <div class="md:w-4/12 w-10/12 border border-blue-500 h-full">
                   
                <div class="mx-4 my-12 space-y-6">
                     <div class="text-center text-2xl">Sign in</div>
                     @if(session()->has('msg'))
                        <p class="text-red-500">{{ session()->get('msg') }}</p>
                     @endif
                <form action="{{ route('userLogin') }}" method="post" class="space-y-6">
                    @csrf
                    <input type="email" name="email" class="block border w-full h-12 p-3 focus:border-blue-500 focus:border-2" placeholder="Email">
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <input type="password" name="password" class="block border w-full h-12 p-3 focus:border-2 focus:border-blue-500 " placeholder="Password">
                     @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <input type="submit" value="Sign in" class="bg-blue-500 text-white w-full py-4 hover:bg-white hover:text-blue-500 hover:border-2 hover:border-green-500">
                </form>
                 <div class="text-center">Forgot Password ?   | <a href="{{ route('register') }}" class="text-blue-500">Don't have an account?</a></div>
                </div>
                
            </div>
       </div>
   </section>
</body>
</html>