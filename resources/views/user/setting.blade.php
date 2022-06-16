@extends('layout.userdashboard')

@section('content')

<section>
    <div class="container mx-auto flex justify-center">
        <div class="flex flex-col md:w-6/12 w-10/12 border my-4 px-4 py-6">
        <h3 class="text-2xl font-bold">Account</h3>
        <div class="my-4">
            <p class="font-bold">Profile</p>
            <p class="text-sm text-gray-600">this information will be displayed publicly so be carefull what you share</p>
        </div>
        <div class="border-b-2 border-b-green-400 pb-4">
            <div class="flex md:flex-row flex-col  justify-between mb-3">
            <div class="space-y-2">
                <label class="block text-gray-500">Phone</label>
                <input type="text" class="border">
            </div>
             <div class="space-y-2">
                <label class="block text-gray-500">country</label>
                <input type="text" class="border">
            </div>
            </div>

            <div class="flex md:flex-row flex-col justify-between my-4">
            <div class="space-y-2">
                <label class="block text-gray-500">Language</label>
                <input type="text" class="border">
            </div>
             <div class="space-y-2">
                <label class="block text-gray-500">Username</label>
                <input type="text" class="border">
            </div>
            </div>
            <button class="bg-green-400 px-4 py-2">Update</button>
    
        </div>

         <div class="my-4">
            <p class="font-bold">Password</p>
            <p class="text-sm text-gray-600">use a strong and hard to guess passord</p>
        </div>
        <div class="pb-4">
            <div class="flex w-full mb-3">
            <div class="space-y-2 md:w-full">
                <label class="block text-gray-500">Current Password</label>
                <input type="text" class="border w-full">
            </div>
            </div>

            <div class="flex md:flex-row flex-col justify-between my-4">
            <div class="space-y-2">
                <label class="block text-gray-500">New Password</label>
                <input type="text" class="border">
            </div>
             <div class="space-y-2">
                <label class="block text-gray-500">Confirm Password</label>
                <input type="text" class="border">
            </div>
            </div>
            <button class="bg-green-400 px-4 py-2">Update</button>
        </div>

    </div>

</section>

@endsection