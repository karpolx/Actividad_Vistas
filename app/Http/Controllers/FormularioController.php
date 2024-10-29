<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('formulario');
    }

    public function procesarFormulario(Request $request)
    {
        $nombre = $request->input('nombre');
        return view('resultado', ['nombre' => $nombre]);
    }
}

