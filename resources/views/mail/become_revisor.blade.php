<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto</title>
</head>
<body>
    <div>
        <h1>{{__('ui.richiesta')}}</h1>
        <h2>{{__('ui.suoi-dati')}}</h2>
        <p>{{__('ui.nome-u')}} {{$username}}</p>
        <p>email {{$email}}</p>
        <br>
        <p>{{$body}}</p>
        <a href="{{route('revisor_make', compact('email'))}}">{{__('ui.REV')}}</a>
    </div>
</body>
</html>