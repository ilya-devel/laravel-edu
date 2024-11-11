<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Logs Info</title>
</head>
<body>
    <div class="container-sm text-center">
        <p class="h1">Logs List</p>
        @if (!empty($logs))
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Time</th>
                    <th scope="col">Duration</th>
                    <th scope="col">IP</th>
                    <th scope="col">URL</th>
                    <th scope="col">Method</th>
                    <th scope="col">Input</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($logs as $key => $log)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $log['id']}}</td>
                        <td>{{ $log['time']}}</td>
                        <td>{{ $log['duration']}}</td>
                        <td>{{ $log['ip']}}</td>
                        <td>{{ $log['url']}}</td>
                        <td>{{ $log['method']}}</td>
                        <td>{{ $log['input']}}</td>
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
