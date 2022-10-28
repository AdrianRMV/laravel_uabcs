<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>

<body>

    <h1>Registro de usuario</h1>
    <form method="post" action="http://127.0.0.1:8000/users">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name">

        <br>
        <br>

        <label for="">Apellido</label>
        <input type="text" name="lastname">

        <br>
        <br>

        <label for="">email</label>
        <input type="email" name="email">


        <br>
        <br>

        <label for="">Contraseña</label>
        <input type="text" name="password">

        <br>
        <br>

        <button type="submit">Enter</button>
    </form>

</body>

</html>