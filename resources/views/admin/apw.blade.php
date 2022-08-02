@extends('layout.admin')

@section('content')

<div class="ml-5">
    @if(session()->has("msg"))
        <p>{{ session("msg") }}</p>
    @endif

    <form action="{{ route('admin.apw.store') }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ $id }}">
        <input type="number" placeholder="amount" class="block my-2 border p-2" name="amount">

        <input type="submit" value="Update Amount" class="bg-green-500 p-4 text-white">
    </form>
</div>



@endsection