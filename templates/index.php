<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Добро пожаловать</h1>
    <p>Name: <?=  $_SESSION[$login]['name'] ?></p>
    <p>age: <?=  $_SESSION[$login]['age'] ?></p>
    <p>age: <?=  print_r($_SESSION) ?></p>
</body>
</html>