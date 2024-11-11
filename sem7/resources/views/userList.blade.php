<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Send myUser Info</title>
</head>
<body>
    <div class="container-sm text-center">
        <p class="h1">myUsers List</p>
        <a href="{{route('addUser')}}">Add myUser</a>
        @if (!empty($myUsers))
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">PDF</th>
                    {{-- <th scope="col">Edit</th> --}}
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($myUsers as $key => $myUser)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><a href="{{route('getUser', $myUser['id'])}}">{{ $myUser['name']}}</a></td>
                        <td><a href="{{route('getUser', $myUser['id'])}}">{{ $myUser['surname']}}</a></td>
                        <td><a href="{{route('getUser', $myUser['id'])}}">{{ $myUser['email']}}</a></td>
                        <td><a href="/pdf/{{ $myUser['id'] }}">PDF</a></td>
                        {{-- <td><a href="/myUser-form/{{ $myUser['id'] }}">Edit</a></td> --}}
                        <td><a href="/user/{{ $myUser['id'] }}/remove">Remove</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>List is empty</p>
        @endif

    </div>
</body>
</html>
