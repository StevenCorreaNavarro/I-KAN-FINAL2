<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function listar()
    {
        $units = Unit::orderBy('id', 'desc')->get();
        return view('unidad.listar', compact('units'));
    }

    public function listardos()
    {
        $units = Unit::orderBy('id', 'desc')->get();
        return view('unidad.listardos', compact('units'));
    }

    public function create()
    { // crear formulario
        //return view('usuario.create');
        return view('unidad.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descrip' => 'required|string',
            'ubica' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }

        Unit::create($data);
        

        // $unit = new Unit();
        // $unit->nombre = $request->nombre;
        // $unit->descrip = $request->descrip;
        // $unit->ubic = $request->ubic;
        // // $unit->img = $request->img;


        // $unit->save();

        return redirect()->route('unit.listar');
    }

    // public function prueba()
    // { // crear formulario
    //     //return view('usuario.create');
    //     return view('layouts.layout');
    // }

    public function show(Unit $unit)
    { //$id
        // $curso=Curso::find($id);
        return view('unidad.show', compact('unit'));
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('unit.listar');
    }

    //Edit
    public function edit(Unit $unit)
    { //Encuentro el Curso
        return view('unidad.edit', compact('unit'));
    }

    //Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descrip' => 'required|string',
            'ubica' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }

        $unit = Unit::findOrFail($id);
        $unit->update($data);
        // $unit->nombre = $request->nombre;
        // $unit->descrip = $request->descrip;
        // $unit->ubic = $request->ubic;
        // $unit->img = $request->img;

        // $unit->save();
        return redirect()->route('unit.listar');
    }
}
