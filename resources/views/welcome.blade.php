@extends('menu')
@section('plantilla')
    <center>
        <div>
            <br><br>
            <h1>Bienvenido a la papeleria BestPaper</h1>
            <h2>Has ingresado como: {{ $sesionActiva->name }}</h2>
            <h2>Su correo actual es: {{ $sesionActiva->email }}</h2>
            <h2>El rol que posee es: {{ $sesionActiva->rol }}</h2>
        </div>
    </center>
@endsection