@extends('layout.admin')

@section('content')
 <div class="w-9/12">
                <table>
                    <tr class="mx-6 mb-4">
                        <th>Name</th>
                        <th>email</th>
                        <th>remove</th>
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
                            <a href="#" class="bg-red-500 text-white p-4">Remove</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
@endsection