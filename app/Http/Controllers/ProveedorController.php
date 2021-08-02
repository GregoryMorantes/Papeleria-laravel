<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProveedorController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function ViewInsert()
    {
        return view('Proveedor/insert');
    }

    public function InsertPro(Request $proveedor)
    {   
        $proveedor->validate([
            'nombre' => 'required',
            'telefono' => 'required|numeric',
            'direccion' => 'required'
        ]);

        $instanciarProveedor=new App\Proveedor;
        $instanciarProveedor->nombre=$proveedor->nombre;
        $instanciarProveedor->telefono=$proveedor->telefono;
        $instanciarProveedor->direccion=$proveedor->direccion;
        $instanciarProveedor->save();
        return redirect('Proveedor/view')->with('guardado', 'El proveedor fue guardado con exito');
    }

    public function ViewPro()
    {   
        $objetoRetornado=App\Proveedor::paginate(13);
        return view('Proveedor/view',compact('objetoRetornado'));
    }

    public function DeletePro($id)
    {
        $deleteProveedor=App\Proveedor::FindOrFail($id);
        $deleteProveedor->delete();
        return redirect('Proveedor/view')->with('guardado', 'El proveedor fue Borrado con exito');
    }

    public function UpdatePro($id)
    {
        $updateProveedor=App\Proveedor::FindOrFail($id);
        return view('Proveedor/update',compact('updateProveedor'));
    }

    public function UpdateDataBasePro(Request $proveedor)
    {
        $instanciarProveedor=App\Proveedor::FindOrFail($proveedor->id);
        $instanciarProveedor->nombre=$proveedor->nombre;
        $instanciarProveedor->telefono=$proveedor->telefono;
        $instanciarProveedor->direccion=$proveedor->direccion;
        $instanciarProveedor->update();
        return redirect('Proveedor/view')->with('guardado','Registro actualizado con exito');

    }
}
