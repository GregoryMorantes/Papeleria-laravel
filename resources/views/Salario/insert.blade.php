@extends('menu')
@section('plantilla')
<br><br><br>
<div class="ui pilled text container segment">
    <h1>Registro Salario del Empleado</h1>
    @if ($errors->any())
        <div class="ui orange message">
            @foreach ($errors->all() as $e)
                {{ $e }}
            @endforeach
        </div>
    @endif
    <form action="{{ route('salario.store')}}" method="POST">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                @error('salario')
                    <div class="ui orange message">Este campo es obligatorio</div>
                @enderror
                <label class="ui blue ribbon label">Salario</label>
                <input type="text" placeholder="salario..." id="salario" name="salario" value="{{ old('salario') }}">
            </div>
            <div class="field">
                @error('fecha')
                    <div class="ui orange message">Este campo es obligatorio</div>
                @enderror
                <label class="ui blue ribbon label">Fecha de pago</label>
                <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}">
            </div>
            <div class="field">
                @error('cedula')
                    <div class="ui orange message">Este campo es obligatorio</div>
                @enderror
                <label class="ui blue ribbon label">Cedula del empleado</label>
                <input type="number" placeholder="cedula..." id="cedula" name="cedula" value="{{ old('cedula') }}">
            </div>
            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
@endsection