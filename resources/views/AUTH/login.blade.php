<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>

    <form method="post" action="{{url('login')}}">
        @csrf

        <label>Email</label>
        <input type="email" name="email">


        <br>
        <br>

        <label>Contraseña</label>
        <input type="password" name="password">

        <br>
        <br>

        <button type="submit">Acceder</button>
    </form>
</body>

</html>