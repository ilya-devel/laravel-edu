<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New Book</title>
    <style>
        .my-invalid {
            color: red;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <div class="container-sm text-center mt-2">
        <h1>Add New Book</h1>
        <form action="{{ Route('addBook') }}" class="d-flex flex-column" method="POST">
            @csrf
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ old('author') }}" class="">
            @error('author')<div class="my-invalid">{{$message}}</div>@enderror


            <label for="title">Title</label>
            <input type="text" name="title" id="title"  ">
            @error('title')<div class="my-invalid">{{$message}}</div>@enderror

            <label for="genre">Genres</label>
            <select multiple name="genre[]" id="genre">
                <option value="sciFi">SciFi</option>
                <option value="humor">Humor</option>
                <option value="history">History</option>
                <option value="fanfic">Fanfic</option>
                <option value="poeme">Poeme</option>
            </select>
            @error('genre')<div class="my-invalid">{{$message}}</div>@enderror

            <input class="mt-2" type="submit" value="Add">
        </form>
    </div>
</body>
</html>
