<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .my-invalid {
            color: red;
            font-size: 0.8em;
        }
    </style>
    <title>Send User Info</title>
</head>
<body>
    <div class="container-sm">
        <form name="myUser-form" id="myUser-form" method="POST" action="{{route('createUser')}}{{ isset($myUser) ? $myUser['id'] : '' }}">
            @csrf
            @if (!empty($method) && $method == 'put')
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required="true" value="{{ isset($myUser) ? $myUser['name'] : old('name') }}">
                @error('name')<div class="my-invalid">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="surname">Lastname</label>
                <input type="text" name="surname" id="surname" class="form-control" required="true" value="{{ isset($myUser) ? $myUser['surname'] : old('surname') }}">
                @error('surname')<div class="my-invalid">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label for="email">Address</label>
                <input type="text" name="email" id="email" class="form-control" required="true" value="{{ isset($myUser) ? $myUser['email'] : old('email') }}">
                @error('email')<div class="my-invalid">{{$message}}</div>@enderror
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Send">
        </form>
    </div>
</body>
</html>
