@extends('layout.admin')

@section('content')

<div class="ml-5">
    <form action="{{ route('admin.create_package') }}" method="post">
        @csrf
        <input type="text" placeholder="Package Name" class="block my-2 border p-2" name="name">
        <input type="number" placeholder="Amount" class="block my-2 border p-2" name="amount">
         <input type="number" placeholder="ROI" class="block my-2 border p-2" name="roi">
          <input type="number" placeholder="Duration of investment" class="block my-2 border p-2" name="duration">
        <input type="text" placeholder="content" class="block my-2 border p-2" name="content">
        <input type="submit" value="Create Package" class="bg-green-500 p-4 text-white">
    </form>
    <table class="block">
    <tr>
        <th>Name</th>
        <th>Amount</th>
         <th>ROI</th>
         <th>Duration</th>
        <th>content</th>
        <th>remove</th>
    </tr>

@foreach($package as $packages)
    <tr>
        <td>{{ $packages->name }}</td><td>{{ $packages->amount }}</td><td>{{ $packages->roi }}</td><td>{{ $packages->duration." Day(s)" }}</td><td>{{ $packages->content }}</td><td><button class="bg-red-500 p-4 text-white">remove</button></td>
    </tr>
@endforeach
</table>
</div>



@endsection