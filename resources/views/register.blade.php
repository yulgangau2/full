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
<form method="post">
    {{ csrf_field() }}
    <p>Name <input type="text" name="name"></p>
    <p>User Name <input type="text" name="user"></p>
    <p>Password <input type="password" name="pass"></p>
    <button type="submit">submit</button>
</form>
</body>
</html>