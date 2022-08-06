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
        <div class="w-full flex flex-col items-center justify-center h-full mt-19 mb-4">
            <img src="{{ asset('data/images/kl1.png') }}" class="my-10 text-5xl text-bold">
            <div class="md:w-4/12 w-10/12 border border-blue-500 h-full">

                <div class="mx-4 my-8 space-y-6">
                    <div class="text-center text-2xl">Create Account</div>
                    <form action="{{ route('admin.register') }}" method="post" class="space-y-6">
                        @csrf

                        <!-- @error('first_name')
    <p class="text-red-500">{{ $message }}</p>
@enderror

                    @error('last_name')
    <p class="text-red-500">{{ $message }}</p>
@enderror
                    <div class="flex" class="w-full">
                        <input type="text" value="{{ old('first_name') }}" name="first_name" class="block border h-12 p-3 w-6/12 mr-2" placeholder="First Name">
                        <input type="text" value="{{ old('last_name') }}" name="last_name" class="block border h-12 p-3 w-6/12 ml-2" placeholder="Last Name">
                    </div> -->
                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="block border w-full h-12 p-3 focus:border-blue-500 focus:border-2"
                            placeholder="Name">
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="block border w-full h-12 p-3 focus:border-blue-500 focus:border-2"
                            placeholder="Email">
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password"
                            class="block border w-full h-12 p-3 focus:border-2 focus:border-blue-500 "
                            placeholder="Password">
                        <input type="password" name="password_confirmation"
                            class="block border w-full h-12 p-3 focus:border-2 focus:border-green-500 "
                            placeholder="Confirm Password">
                        <input type="submit" value="Sign in"
                            class="bg-blue-500 text-white w-full py-4 hover:bg-white hover:text-blue-500 hover:border-2 hover:border-green-500">

                    </form>
                    <div class="text-center"><a href="{{ route('admin.login') }}" class="text-blue-500">Already have an
                            account?</a></div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
