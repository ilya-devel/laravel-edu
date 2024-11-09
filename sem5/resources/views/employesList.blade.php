<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Send employee Info</title>
</head>
<body>
    <div class="container-sm text-center">
        <p class="h1">Employees List</p>
        <a href="{{url('employee-form')}}">Add Employee</a>
        @if (!empty($employes))
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Description</th>
                    <th scope="col">Work Data</th>
                    <th scope="col">Job Postion</th>
                    <th scope="col">Address</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($employes as $key => $employee)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $employee['name']}}</td>
                        <td>{{ $employee['lastname']}}</td>
                        <td>{{ $employee['description']}}</td>
                        <td>{{ $employee['workData']}}</td>
                        <td>{{ $employee['jobPosition']}}</td>
                        <td>{{ $employee['address']}}</td>
                        <td><a href="/employee-form/{{ $employee['id'] }}">Edit</a></td>
                        <td><a href="/employee-form/{{ $employee['id'] }}/remove">Remove</a></td>
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
