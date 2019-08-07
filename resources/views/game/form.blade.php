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
    <h1>Game form</h1>
    <form action="/game" method="post">
        @csrf
        Name <input type="text" name="name">
        Price <input type="number" name="price">
        <input type="submit" value="Submit">
    </form>

</body>
</html>