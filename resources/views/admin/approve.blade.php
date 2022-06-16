@extends('layout.admin')

@section('content')
 <div class="w-9/12">
                <table>
                    <tr class="mx-6 mb-4">
                        <th>amount</th>
                        <th>transaction id</th>
                        <th>prove</th>
                        <th>Approve</th>
                    </tr>
                    @foreach($approve as $approves)
                    <tr class="m-6">
                        <td>
                            {{ $approves->amount }}
                        </td>
                        <td>
                            {{ $approves->trans_id}}
                        </td>
                        <td>
                            <a href="{{ asset('storage/'.$approves->path) }}"><img src="{{ asset('storage/'.$approves->path) }}" height="200" width="200"></a>
                        </td>
                        <td>
                            <a href="{{ route('approved',['approval'=> $approves]) }}" class="bg-green-500 text-white p-4">Approve</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
@endsection