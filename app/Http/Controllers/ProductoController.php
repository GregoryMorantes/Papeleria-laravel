<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App;

class ProductoController extends Controller
{
    public function InsertProd()
    {   
        $infoproveedor=App\Proveedor::All();
        return view('producto/insert',compact('infoproveedor'));
    }

    public function InsertProducto(Request $producto)
    {   
        $ruta = Storage::disk('public')->put('Producto',$producto->file('foto'));
        $instanciaproducto = new App\Producto;
        $instanciaproducto->nombre = $producto->nombre;
        $instanciaproducto->precio = $producto->precio;
        $instanciaproducto->descripcion = $producto->descripcion;
        $instanciaproducto->proveedor_id = $producto->proveedor;
        $instanciaproducto->foto = $ruta;
        $instanciaproducto->foto_url = $ruta;
        $instanciaproducto->save();
       
        //return redirect('Producto/view')->with('guardado','Producto Insertado con Exito');
    }
}
