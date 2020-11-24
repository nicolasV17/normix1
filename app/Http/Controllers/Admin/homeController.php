<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Otec;

class homeController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function otec() {
      
        $otecs = Otec::all();
        $orden = "otec";
        return view('admin.index',compact('orden','otecs'));
    }

    public function vista_crear() {
       
        $orden = "otec_crear";
        return view('admin.index',compact('orden'));
    }

    public function vista_editar($otec) {
        $otec = Otec::findOrFail($otec);
        $orden = "otec_editar";
        return view('admin.index',compact('orden','otec'));
    }
}
