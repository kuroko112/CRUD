<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('postlogin') }}" method="post">
        <input type="email"   placeholder="email"  name="email">
        <input type="password"placeholder="password"  name="password">
        <input type="submit"    value="GO">
        @csrf
    </form>
</body>
</html>