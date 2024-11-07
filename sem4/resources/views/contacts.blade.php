@extends('layouts.default')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Address</th>
            <th scope="col">Post Code</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contacts as $key => $contact)
            <tr>
                <th scope="row">{{ $key }}</th>
                <td>{{ $contact['address']}}</td>
                <td>{{ $contact['post_code']}}</td>
                <td>
                @if ($contact['email'] > 18)
                    {{ $contact['email']}}
                @else
                    Адрес электронной почты не указан
                @endif
                </td>
                <td>{{ $contact['phone']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
