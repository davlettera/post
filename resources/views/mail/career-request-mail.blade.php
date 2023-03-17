<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>We received a request</h1>
    <h4>Request for the role of {{$info['role']}}</h4>
    <p>Received from {{$info['email']}}</p>
    <h4>Message:</h4>
    <p>{{$info['biography']}}</p>
</body>
</html>