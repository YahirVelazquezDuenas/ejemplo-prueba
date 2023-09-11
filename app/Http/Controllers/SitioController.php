<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class SitioController extends Controller
{
    public function contactoForm($tipo = null)
    {
        return view('contacto', compact('tipo'));
    }

    public function contactoSave(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'comentario' => ['required', 'min:10', 'max:50']
        ]);
    
        $contacto  = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->comentario = $request->comentario;
        $contacto->save();
    
        return redirect('/contacto');
    }
}
