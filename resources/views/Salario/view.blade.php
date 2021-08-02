@extends('menu')
@section('plantilla')
<br><br><br>
@if (empty(session('guardado')))
    @else
        <div class="ui success message">
            <i class="close icon"></i>
            <div class="header">
                {{session('guardado')}}
            </div>
        </div>
        
@endif
    <table class="ui blue table">
        <thead>
            <tr>
                <th>Salario</th>
                <th>Fecha Pago</th>
                <th>Cedula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($objetoRetornado as $salario)
                <tr>
                <td>{{$salario->salario}}</td>
                <td>{{$salario->fecha}}</td>
                <td>{{$salario->cedula}}</td>
                    <td>
                        <a href="#"><i class="trash icon"></i></a>
                        <a href="#"><i class="sync icon"></i></a>
                        <a href=""><i class="eye icon"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        @if ($objetoRetornado->lastPage() > 1)
        <tfoot>
            <tr><th colspan="5">
              <div class="ui right floated pagination menu">
                <a href="{{ $objetoRetornado->previousPageUrl() }}" class="{{ ($objetoRetornado->currentPage() == 1) ? ' disabled ' : '' }}icon item">
                  <i class="left chevron icon"></i>
                </a>
                @for ($i = 1; $i <= $objetoRetornado->lastPage(); $i++)
                    <a href="{{ $objetoRetornado->url($i) }}" class="{{ ($objetoRetornado->currentPage() == $i) ? ' active ' : '' }}item">{{ $i }}</a>
                @endfor
                <a href="{{ $objetoRetornado->nextPageUrl() }}" class="{{ ($objetoRetornado->currentPage() == $objetoRetornado->lastPage()) ? ' disabled ' : '' }}icon item">
                  <i class="right chevron icon"></i>
                </a>
              </div>
            </th>
          </tr></tfoot>
          @endif
    </table>
@endsection