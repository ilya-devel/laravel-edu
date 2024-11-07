@extends('layouts.default')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Position</th>
            <th scope="col">Address</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $key => $user)
            <tr>
                <th scope="row">{{ $key }}</th>
                <td>{{ $user['name']}}</td>
                <td>
                @if ($user['age'] > 18)
                    {{ $user['age']}}
                @else
                    Пользователь слишком молод
                @endif
                </td>
                <td>{{ $user['position']}}</td>
                <td>{{ $user['address']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
