<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('postregister') }}" method="post">
        <input type="name"      placeholder="username"      name="name"     >
        <input type="email"     placeholder="email"         name="email"    >
        <input type="password"  placeholder="password"      name="password" >
        <input type="submit"                                value="Save">
        @csrf
    </form>
</body>
</html>