@extends('layout.admin')

@section('content')
    <div class="m-4">

        <p>Products</p>



        <form action="{{ route('admin.product') }}" method="post" enctype="multipart/form-data">

            @csrf

            <input type="text" name="name" placeholder="Product Name" class="border m-2">
            <br>
            <input type="text" name="content" placeholder="About Product" class="border m-2">
            <br>
            <label>Upload product image</label>
            <input type="file" name="file">
            <br>
            <input type="submit" value="upload" name="submit" class="bg-green-600 p-4 text-white">
        </form>

    </div>
@endsection
