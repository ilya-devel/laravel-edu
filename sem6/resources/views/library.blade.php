<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Library</title>
</head>
<body>
    <div class="container-sm text-center">
        <p class="h1">List books</p>
        <a href="{{ Route('showForm') }}">Add book</a>
        @if (!empty($books))
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Genres</th>
                    {{-- <th scope="col">Edit</th> --}}
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($books as $key => $book)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $book['author'] }}</td>
                        <td>{{ $book['title'] }}</td>
                        <td>@foreach (unserialize($book['genre']) as $genre) {{ $genre }} @endforeach</td>
                        {{-- <td><a href="/book-form/{{ $book['id'] }}">Edit</a></td> --}}
                        <td><a href="/book/{{ $book['id'] }}/remove">Remove</a></td>
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
