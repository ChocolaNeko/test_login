<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <h3>home</h3>
    <form method="POST" action="/member">
        @csrf
        Account:
        <input type="text" name="acc">
        <br><br>
        Password:
        <input type="password" name="pwd">
        <br>
        <input type="submit" value="login">
    </form>
</body>
</html>