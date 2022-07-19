@extends('layout.admin')

@section('content')
<div class="ml-4">
<h1>wallet </h1>
<div class="block">
<form method="post">
    @csrf
    <input type="text" name="name" placeholder="Coin Type" class="border"><br>
    <input type="text" name="address" placeholder="Wallet Address" class="border"><br>
    <input type="submit" value="add wallet" class="bg-green-500 px-6 py-4">
</form>
</div>
<table class="max-w-6xl w-12/12">
    <tr>
        <th>Coin</th>
        <th>Address</th>
        <th>remove</th>
    </tr>
    @if(empty($wallet))
        <p>No Data</p>
    @else
    @foreach($wallet as $wallets)
    <tr>
        <td class="text-red-400">{{ $wallets->name }}</td>
        <td class="border">{{ $wallets->address }}</td>
         <td class="border"><a href="{{ route('del-wallet',['wallet' => $wallets->id ]) }}">remove</a></td>
    </tr>
    @endforeach
    @endif
</table>
</div>
@endsection