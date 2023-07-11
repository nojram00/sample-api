<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($data as $d)
            <li>
                <h1>Name: <h3>{{$d->name}}</h3></h1>
                <h1>ID: <h3>{{$d->id}}</h3></h1>
            </li>
        @endforeach
    </ul>

</body>
</html>
