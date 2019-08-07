<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Game Edit</h1>
    <form action="{{ route('game.update', $game->id) }}" method="PUT">
        @method('PUT')
        @csrf
        <input name="_method" type="hidden" value="PUT">
        Name <input type="text" name="name" value="{{$game->name}}">
        Price <input type="number" name="price" value="{{$game->price}}">
        <input type="submit" value="Submit">
    </form>

</body>
</html>