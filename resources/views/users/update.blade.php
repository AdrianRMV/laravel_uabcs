<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Update view</h1>
    <form method="post" action="{{ url('/users') }}">
        @csrf
        @method('PUT')

        <input hidden name="id" value={{ $user->id }}>
        <label for="">Nombre</label>
        <input type="text" value="{{ $user->name }}">

        <br>
        <br>

        <label for="">Apellido</label>
        <input type="text" value="{{ $user->lastname }}">

        <br>
        <br>

        <label for="">email</label>
        <input type="email" value="{{ $user->email }}">


        <br>
        <br>

        <button type="submit">Enter</button>
    </form>
</body>

</html>
