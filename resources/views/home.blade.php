@extends('layouts.app')

@section('head')
    <!-- soy prueba -->
@endsection

@section('contenido')
    <h1>Hola {{ Auth::user()->name }}</h1>

    <a href="{{ url('users') }}"
        style="text-decoration: none; background-color: #d3d3d3; border-radius: 15px; padding: 10px 10px; text-align: center;">
        Ir a usuarios
    </a>
    <br><br>

    <form method="post" action="{{ url('logout') }}">
        @csrf
        <button type="submit">
            Salir
        </button>
    </form>
@endsection
