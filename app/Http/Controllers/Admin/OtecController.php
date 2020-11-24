<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Otec;


class OtecController extends Controller
{
    public function crear(Request $request) {

        $request->validate([
            'fecha_creacion' => 'required',
            'rut' => 'required',
            'razon_social' => 'required',
            'nombre_fantasia' => 'required',
            'direccion' => 'required',
            'comuna' => 'required',
            'region' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
        ]);

        


         $nueva_otec = new Otec;
         $nueva_otec->fecha_creacion = $request->fecha_creacion;
         $nueva_otec->rut = $request->rut;
         $nueva_otec->razon_social = $request->razon_social;
         $nueva_otec->nombre_fantasia = $request->nombre_fantasia;
         $nueva_otec->direccion = $request->direccion;
         $nueva_otec->comuna = $request->comuna;
         $nueva_otec->region = $request->region;
         $nueva_otec->telefono = $request->telefono;
         $nueva_otec->telefono_2 = $request->telefono_2;
         $nueva_otec->email = $request->email;

        $nueva_otec->save();
        return redirect()->route('otec');
    }

    public function eliminar($id) {
       
        $otec = Otec::findOrFail($id);
        $otec->delete();
        return redirect()->route('otec')->with('mensaje', 'otec eliminada exitosamente');
        
    }

    
    public function editar(Request $request) {

        $request->validate([
            'fecha_creacion' => 'required',
            'rut' => 'required',
            'razon_social' => 'required',
            'nombre_fantasia' => 'required',
            'direccion' => 'required',
            'comuna' => 'required',
            'region' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);
       
        $otec = Otec::findOrFail($request->id);
        $otec->fecha_creacion = $request->fecha_creacion;
        $otec->rut = $request->rut;
        $otec->razon_social = $request->razon_social;
        $otec->nombre_fantasia = $request->nombre_fantasia;
        $otec->direccion = $request->direccion;
        $otec->comuna = $request->comuna;
        $otec->region = $request->region;
        $otec->telefono = $request->telefono;
        $otec->telefono_2 = $request->telefono_2;
        $otec->email = $request->email;

        $otec->update();
        return redirect()->route('otec')->with('mensaje', 'otec actualizada exitosamente');
        
        
      
    }



  
}
