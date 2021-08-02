@extends('menu')
@section('plantilla')
<br><br><br>
<div class="ui pilled text container segment">
    <h1>Registro Producto</h1>
    <form action="{{ route('InsertProducto')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Nombre</label>
                <input type="text" placeholder="Nombre..." name="nombre">
            </div>
            <div class="field">
                <label class="ui blue ribbon label">Precio</label>
                <input type="number" placeholder="Precio..." name="precio">
            </div>
            <div class="field">
                <label class="ui blue ribbon label">Descripcion</label>
                <input type="text" placeholder="Descripcion..." name="descripcion">
            </div>
            <div class="field">
                <label class="ui blue ribbon label">Proveedor</label>
                <select name="proveedor" class="ui search dropdown">
                    <option value="">Seleccione un proveedor...</option>
                    @foreach ($infoproveedor as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="field">
                <label class="ui blue ribbon label">Foto</label>
                <input type="file" name="foto" accept=".jpg, .png, .gif">
            </div>
            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
@endsection