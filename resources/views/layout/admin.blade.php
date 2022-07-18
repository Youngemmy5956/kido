<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <title>Document</title>
</head>
<body>
    <section class="bg-green-400 w-full">
    <nav class=" flex justify-between container mx-auto p-10">
        <p>Bitool</p>
        <div class="flex space-x-6">
            <a href="#" class="block">Home</a>
             <a href="#" class="block">Users</a>
              <a href="{{ route('admin.logout') }}" class="block">login</a>
        </div>
    </nav>
    </section>

    <section>
        <div class="flex">
            <div class="bg-green-600 w-3/12">
                <ul class="flex flex-col justify-center">
                    <li><a href="{{ route('admin.dashboard') }}">Users</a></li>
                    <li><a href="{{ route('admin.approve') }}">Payment Approvals</a></li>
                    <li><a href="{{ route('admin.package') }}">Packages</a></li>
                     <li><a href="{{ route('admin.register') }}">Admin</a></li>
                </ul>
            </div>
           @yield("content")

        </div>
    </section>
</body>
</html>