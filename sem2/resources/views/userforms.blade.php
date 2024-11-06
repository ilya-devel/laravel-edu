<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Form</title>
</head>
<body>
    <form action="{{ url('store_form') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
