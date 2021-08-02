<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BestPaper</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}">
  <link rel="stylesheet"  href="{{ asset('css/semantic.css') }}">
  <script src="{{ asset('js/jquery.js')}}"></script>
  <script src="{{ asset('js/semantic.min.js')}}"></script>
  <script src="{{ asset('js/sweetalert2.all.min.js')}}"></script>
  <script src="{{ asset('js/application.js') }}"></script>
</head>
<body>
  <div class="ui top fixed menu">
    <div class="item">
      <img src="{{ asset('img/logo.png')}}">
    </div>
    <a href="{{ route('home')}}" class="item">Home</a>
    <div class="ui dropdown item">Proveedor<i class="dropdown icon"></i>
      <div class="menu">
        <a href="{{ route('ViewProveedor')}}" class="item">Listado Proveedor<a>
        <a href="{{ route('insertpro')}}" class="item">Registrar Proveedor<a>
      </div>
    </div>
    <div class="ui dropdown item">Salarios<i class="dropdown icon"></i>
      <div class="menu">
        <a href="{{ route('salario.index')}}" class="item">Mis pagos<a>
        <a href="{{ route('salario.create')}}" class="item">Registrar pago<a>
      </div>
    </div>
    <div class="ui dropdown item">Producto<i class="dropdown icon"></i>
      <div class="menu">
        <a href="#" class="item">Listar Producto<a>
        <a href="{{ route('InsertProd')}}" class="item">Registrar Producto<a>
      </div>
    </div>
    <div class="ui dropdown item">Factura<i class="dropdown icon"></i>
      <div class="menu">
        <a href="{{ route('factura.index') }}" class="item">Listar Facturas<a>
        <a href="{{ route('factura.create')}}" class="item">Registrar Factura<a>
      </div>
    </div>
    <div class="item right menu">
      <div class="item menu">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </div>
  </div>
  @yield('plantilla')
</body>
<script>
  $('.ui.dropdown')
  .dropdown();

  $('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade');
  });
</script>
</html>