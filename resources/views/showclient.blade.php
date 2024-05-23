<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show {{$client->clientname}}</title>
</head>
<body>
    <p><img src="{{asset('assets/img/' . $client->img)}}" alt=""></p>
    <h1><strong>client:</strong>{{$client->clientname}}</h1>
    <hr>
    <h1><strong>phone:</strong>{{$client->phone}}</h1>
    <hr>
    <h1><strong>email:</strong>{{$client->email}}</h1>
    <hr>
    <h1><strong>website:</strong>{{$client->website}}</h1>
    <hr>
</body>
</html>