<?php
namespace App\Http\Controllers;
use App\Models\Chance;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function showOptions()
    {
        $options = Chance::all();
        return view('prueba2', compact('options'));
    }

    public function selectOption(Request $request, $id)
    {
        $user = Auth::ususario();
        $user->ocasion = $id;
        $user->save();

        return redirect()->back()->with('success', 'Opción seleccionada exitosamente.');
    }
}