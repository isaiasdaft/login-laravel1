@extends('layouts/main')

@section('titulo_pagina', 'login Usuario')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
            <div class="card-body">
                <h2>Inicio de Sesion</h2>
            <form action="{{ route ('logear')}}" method="post">
                @csrf
                @method('POST')
                <label for="email">Correo</label>
                <input type="text" class="form-control" name="email" id="email">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password">
                <button class="btn btn-primary mt-4">Ingresar</button>
                <a href="{{ route('registro')}}" class="btn btn-success mt-4">Registro</a>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection