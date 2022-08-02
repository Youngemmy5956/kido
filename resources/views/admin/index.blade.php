@extends('layout.admin')

@section('content')
 <div class="w-9/12">
                <table>
                    <tr class="mx-6 mb-4">
                        <th>Name</th>
                        <th>email</th>
                        <th>view</th>
                    </tr>
                    @foreach($users as $user)
                    <tr class="m-6">
                        <td>
                            {{ $user->first_name.' '.$user->last_name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            <a href="{{ route('admin.apw',['user'=>$user->id]) }}" class="bg-gray-700 text-black p-4">view</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
@endsection