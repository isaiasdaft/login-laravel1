@extends('layouts/main')

@section('titulo_pagina', 'Registro de Usuario')


@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-body">
                    <h2>Registro de usuarios</h2>
                    <form action="{{ route('registrar')}}" method="post">
                        @csrf
                        @method('POST')
                        <label for="email">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <label for="password">Controseña</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <button class="btn btn-primary mt-4">Registrarse</button>
                        <a href="{{ route('login')}}" class="btn btn-info mt-4">Inicar sesion</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection