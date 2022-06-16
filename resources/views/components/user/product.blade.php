@props(['coin'])

<div class="product flex flex-col md:flex-row justify-self-stretch justify-around flex-wrap w-full">
                        <!-- product card -->

                        <table class="w-full text-left">
                            <tr class="border-b-2 text-2xl text-green-600 border-green-900 p-6">
                                <th>Coin</th>
                                <th>Price</th>
                                 <th>Change</th>
                            </tr>
                            @foreach($coin as $keys => $coins)
                            <tr class="mb-8">
                                <td class="text-2xl text-blue-700 font-bold uppercase">{{ $keys }}</td>
                                <td class="text-2xl text-green-700 font-bold">{{ $coins['price'] }}</td>
                                <td class="text-2xl text-red-600 font-bold">{{ $coins['change'] }}</td>
                            </tr>
                            @endforeach
                        </table>
                       
                        <!-- end of product card -->
                        
</div>
