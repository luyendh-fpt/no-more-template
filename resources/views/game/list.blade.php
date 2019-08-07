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
<h1>Game list</h1>
<ul>
    @foreach($list as $item)
        <li>{{$item->name}} - ${{$item->price}} <a href="/game/{{$item->id}}">Details</a> &nbsp;&nbsp;<a href="{{ route('game.edit', $item->id) }}">Edit</a></li>
    @endforeach
</ul>
    {{$list->links()}}
</body>
</html>