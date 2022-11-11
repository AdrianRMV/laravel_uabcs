@extends('layouts.app');

@section('contenido')
    <h1>
        Usuarios del sistema:
    </h1>

    <ol>
        @foreach ($users as $user)
            <li>
                {{ $user->name }}
                <a href="{{ url('users', $user->id) }}"> Editar</a>
            </li>
        @endforeach
    </ol>
@endsection
