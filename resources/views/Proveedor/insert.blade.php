@extends('menu')
@section('plantilla')
<br><br><br>
<div class="ui pilled text container segment">
    <h1>Registro Proveedor</h1>
    @if ($errors->any())
        <div class="ui orange message">
            @foreach ($errors->all() as $e)
                {{ $e }}
            @endforeach
        </div>
    @endif
    <form action="{{ route('InsertProveedor')}}" method="POST">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                @error('nombre')
                    <div class="ui orange message">Este campo es obligatorio</div>
                @enderror
                <label class="ui blue ribbon label">Nombre</label>
                <input type="text" placeholder="Nombre..." id="nombre" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div class="field">
                @error('telefono')
                    <div class="ui orange message">Este campo es obligatorio</div>
                @enderror
                <label class="ui blue ribbon label">Telefono</label>
                <input type="number" placeholder="Telefono..." id="telefono" name="telefono" value="{{ old('telefono') }}">
            </div>
            <div class="field">
                @error('direccion')
                    <div class="ui orange message">Este campo es obligatorio</div>
                @enderror
                <label class="ui blue ribbon label">direccion</label>
                <input type="text" placeholder="direccion..." id="direccion" name="direccion" value="{{ old('direccion') }}">
            </div>
            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
@endsection