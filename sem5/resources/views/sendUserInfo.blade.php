<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Send User Info</title>
</head>
<body>
    <div class="container-sm">
        <form name="employee-form" id="employee-form" method="POST" action="/employee-form/{{ isset($employee) ? $employee['id'] : '' }}">
            @csrf
            @if (!empty($method) && $method == 'put')
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required="true" value="{{ isset($employee) ? $employee['name'] : '' }}">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required="true" value="{{ isset($employee) ? $employee['lastname'] : '' }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" required="true" value="{{ isset($employee) ? $employee['description'] : '' }}">
            </div>
            <div class="form-group">
                <label for="workData">Work Data</label>
                <input type="text" name="workData" id="workData" class="form-control" required="true" value="{{ isset($employee) ? $employee['workData'] : '' }}">
            </div>
            <div class="form-group">
                <label for="jobPostion">Job Postion</label>
                <input type="text" name="jobPosition" id="jobPosition" class="form-control" required="true" value="{{ isset($employee) ? $employee['jobPosition'] : '' }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required="true" value="{{ isset($employee) ? $employee['address'] : '' }}">
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Send">
        </form>
        <br>
        <br>
        <form name="jsonDecode" id="jsonDecode" method="POST" action="/jsonDecode">
            @csrf
            <div class="form-group">
                <label for="jsonArea">Input JSON text</label>
                <br>
                <textarea name="jsonArea" id="jsonArea" cols="60" rows="15"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Send">
        </form>
    </div>
</body>
</html>
