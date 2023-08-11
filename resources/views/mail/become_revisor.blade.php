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
        <h1>Un utente ha richiesto di lavorare con noi</h1>
        <h2>Ecco i suoi dati:</h2>
        <p>Nome: {{$user->name}}</p>
        <p>email: {{$user->email}}</p>
        <p>Se vuoi renderlo revisore clicca qui:</p>
        <a href="{{route('revisor_make', compact('user'))}}">RENDI REVISORE</a>
    </div>
</body>
</html>