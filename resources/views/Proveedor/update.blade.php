@extends('menu')
@section('plantilla')
<br><br><br>
<div class="ui pilled text container segment">
    <h1>Actualizar Proveedor</h1>
    <form action="{{ route('UpdateDataBaseProveedor')}}" method="POST">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
            <label class="ui blue ribbon label">Nombre</label>
            <input type="hidden" name="id" value="{{$updateProveedor->id}}">
            <input type="text" id="nombre" name="nombre" value="{{$updateProveedor->nombre}}">
            </div>
            <div class="field">
                <label class="ui blue ribbon label">Telefono</label>
            <input type="number" id="telefono" name="telefono" value="{{$updateProveedor->telefono}}">
            </div>
            <div class="field">
                <label class="ui blue ribbon label">direccion</label>
            <input type="text" id="direccion" name="direccion" value="{{$updateProveedor->direccion}}">
            </div>
            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Actualizar">
            </center>
        </div>
    </form>
</div>
@endsection