<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoPrincipal;
class FotoPrincipalController extends Controller
{
    public function listar()
    {
        $posts = FotoPrincipal::orderBy('id', 'desc')->get();
        return view('fohome.listar', compact('posts'));
    }
   

    public function listardos()
    {
        $posts = FotoPrincipal::orderBy('id', 'desc')->get();
        return view('fohome.listardos', compact('posts'));
    }

    public function create()
    { 
        return view('fohome.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'info1' => 'required|string',
            'info2' => 'required|string',
        ]);
        $data = $request->all();
        if ($request->hasFile('image1')) {
            $filename = time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('images'), $filename);
            $data['image1'] = $filename;
        }
        if ($request->hasFile('image2')) {
            $filename = time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('images'), $filename);
            $data['image2'] = $filename;
        }

        FotoPrincipal::create($data);
        return redirect()->route('slider.listar');
    }

    // public function show(FotoPrincipal $post)
    // { 
    //     return view('unidad.show', compact('post'));
    // }

    // public function destroy(FotoPrincipal $post)
    // {
    //     $post->delete();
    //     return redirect()->route('post.listardos');
    // }

    //Edit
    public function edit(FotoPrincipal $post)
    { //Encuentro el Curso
        return view('fohome.edit', compact('post'));
    }

    //Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'info1' => 'required|string',
            'info2' => 'required|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('image1')) {
            $filename = time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('images'), $filename);
            $data['image1'] = $filename;
        }
        if ($request->hasFile('image2')) {
            $filename = time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('images'), $filename);
            $data['image2'] = $filename;
        }
        
        $post = FotoPrincipal::findOrFail($id);
        $post->update($data);
        // return redirect()->route('post.listar');

        // FotoPrincipal::create($data);
        return redirect()->route('slider.listar');
    }


  }