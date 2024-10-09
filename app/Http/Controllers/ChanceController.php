<?php

namespace App\Http\Controllers;

use App\Models\Chance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChanceController extends Controller
{
    // public function showOptions()
    // {
    //     $chances = Chance::all();
    //     return view('ocasion', compact('chances'));
    // }

    // public function selectOption(Request $request, $id)
    // {
    //     $usuario = Auth::user();
    //     $usuario->ocasion = $id;
    //     // $usuario->save();

    //     return redirect()->back()->with('success', 'Opción seleccionada exitosamente.');
    // }
    public function index()
    {
        $occasions = Chance::all();
        return view('unidad.ocasiones', compact('occasions'));
    }

    public function select($id)
    {
        $occasion = Chance::findOrFail($id);
        
        // Realiza la acción deseada con el registro seleccionado
        // Ejemplo: redirigir a una vista que muestra detalles del registro
        return redirect()->route('occasions.show', $id);
    }
    public function show($id)
    {
        $occasion = Chance::findOrFail($id);
        return view('ocasionshow', compact('occasion'));
    }
}
