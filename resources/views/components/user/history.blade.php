
@props(['invest'])
<section>
                        <div class="flex w-full  justify-center">
                        <table class="md:w-10/12 w-full">
                            <thead class="text-center my-4 border-b-2 text-gray-500">
                                <tr>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>ROI</th>
                                    <th>Cashout</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($invest as $investment)
                                <tr class="my-4">
                                    <td class="py-2 text-gray-600">{{ $investment->duration.' days' }}</td>
                                    <td class="py-2 text-gray-600">{{ $investment->amount }}</td>
                                    <td class="py-2 text-gray-600">{{ $investment->roi }}</td>
                                    <td class="py-2 text-gray-600">
                                        @if(strtotime($investment->date ) > strtotime($investment->expire_at) )
                                            <button class="bg-green-500 px-4 py-2 text-white rounded-lg"><span class="fa-solid fa-bank p-2"></span>Cashout</button>
                                         @else
                                            <button class="bg-red-500 px-4 py-2 text-white rounded-lg"><span class="fa-solid fa-lock p-2"></span>Pending</button>
                                         @endif
                                    </td>
                                </tr>
                                @endforeach
                                <!-- <tr class="my-4">
                                    <td class="py-2 text-gray-600">26/04/2022</td>
                                    <td class="py-2 text-gray-600">20,000</td>
                                    <td class="py-2 text-gray-600">35,000</td>
                                    <td class="py-2 text-gray-600"><button class="bg-red-500 px-4 py-2 text-white"><span class="fa-solid fa-lock p-2"></span>Pending</button></td>
                                </tr> -->
                                
                            </tbody>
                        </table>
                        </div>

</section>
