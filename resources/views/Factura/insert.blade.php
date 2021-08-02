@extends('menu')
@section('plantilla')
<br><br><br>
<div class="ui pilled text container segment">
    <h1>Registro Factura</h1>
    <form action="{{ route('InsertProducto')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Documento Cliente</label>
                <input type="number" placeholder="Numero del documento..." name="documento" id="documento" onchange="capturarDatos()">
            </div>
            <div class="field">
                <label id="label_nombre" class="">Nombre:</label>
                <label id="label_apellido" class="">Apellido:</label>
                <label id="label_telefono" class="">Telefono:</label>
                <label id="label_direccion" class="">Direccion:</label>
            </div>
             <div class="field">
                <label class="ui blue ribbon label">Producto</label>
                <div class="ui fluid search selection dropdown">
                    <input type="hidden" name="producto" id="producto">
                    <i class="dropdown icon"></i>
                    <div class="default text">Seleccione un Producto...</div>
                    <div class="menu">
                        @foreach ($infoproducto as $producto)
                            <div id="selector{{ $producto->id }}" class="item" data-value="{{ $producto->id }}" data-text="{{ $producto->nombre }}" data-img="{{ $producto->foto }}" data-precio="{{ $producto->precio }}">
                                <img class="ui mini avatar image" src="{{ asset('storage/'.$producto->foto)}}">
                                {{ $producto->nombre }}
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
            <div class="two fields">
                <div class="field">
                    <label class="ui blue ribbon label">Cantidad Producto</label>
                    <input type="number" placeholder="Cantidad..." name="cantidadproducto" id="cantidadproducto">
                </div>
                <div class="field">
                    <label class="ui blue ribbon label">.</label>
                    <button onclick="agregarCarritoFactura()" type="button" class="ui inverted blue button">Agregar al carrito</button>
                </div>
            </div>
            <br><br><br>
            <div class="ui four cards" id="cardPrincipal"></div>
            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
<script>
    function capturarDatos() {
        var documento = $('#documento').val();
        var rutaMala = "{{ route('cliente.show', "id") }}";
        var rutaBuena = rutaMala.replace('id',documento);
        $.ajax({
            url: rutaBuena,
            method: 'GET'
        }).then(function (datos){
            var datos = JSON.parse(datos.replace(/&quot;/g,'"'));
            document.getElementById('label_nombre').innerHTML = "Nombre: " + datos.nombre;
            document.getElementById('label_apellido').innerHTML = "Apellido: " + datos.apellido;
            document.getElementById('label_telefono').innerHTML = "Telefono: " + datos.telefono;
            document.getElementById('label_direccion').innerHTML = "Direccion: " + datos.direccion;
        },
        function () {
            alert("No existe este cliente");
            document.getElementById('label_nombre').innerHTML = "Nombre: ";
            document.getElementById('label_apellido').innerHTML = "Apellido: ";
            document.getElementById('label_telefono').innerHTML = "Telefono: ";
            document.getElementById('label_direccion').innerHTML = "Direccion: ";
        }
        );
    }
</script>
@endsection