<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use App\Models\fav;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listar()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('post.listar', compact('posts'));
    }
    public function listartres()

    {
        
        // $posts = Fav::orderBy('id', 'desc')->get();
        // return view('post.favoritos', compact('posts'));
        $favs = Post::all();
        $posts = Fav::all();
        return view('post.favoritos', compact('posts', 'favs'));
    }


    public function listardos()
    {
         
        $posts = Post::orderBy('id', 'desc')->get();
        return view('post.listardos', compact('posts'));
    }

    public function create()
    { // crear formulario
        //return view('usuario.create');
        
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string',
            'descrip1' => 'required|string',
            'descrip2' => 'required|string',
            'descrip3' => 'required|string',
            'descrip4' => 'required|string',
            'ubica' => 'required|string|max:5000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }

        Post::create($data);
        

        // $unit = new Unit();
        // $unit->nombre = $request->nombre;
        // $unit->descrip = $request->descrip;
        // $unit->ubic = $request->ubic;
        // // $unit->img = $request->img;


        // $unit->save();

        return redirect()->route('post.listardos');
    }

    // public function prueba()
    // { // crear formulario
    //     //return view('usuario.create');
    //     return view('layouts.layout');
    // }

    public function show(Post $post)
    { //$id
        // $curso=Curso::find($id);
        return view('unidad.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.listardos');
    }

    //Edit
    public function edit(Post $post)
    { //Encuentro el Curso
        return view('post.edit', compact('post'));
    }

    //Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string',
            'descrip1' => 'required|string',
            'descrip2' => 'required|string',
            'descrip3' => 'required|string',
            'descrip4' => 'required|string',
            'ubica' => 'required|string|max:5000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }

        $post = Post::findOrFail($id);
        $post->update($data);
        // $unit->nombre = $request->nombre;
        // $unit->descrip = $request->descrip;
        // $unit->ubic = $request->ubic;
        // $unit->img = $request->img;

        // $unit->save();
        return redirect()->route('post.listar');
    }












    public function stores(Request $request)
    {
        $fav = Fav::create([
            'user_id' => auth()->id(),
            'post_id' => $request->post_id,
        ]);

        return response()->json(['success' => true, 'fav' => $fav]);
    }
    // Controlador que maneja la lógica para mostrar los divs
    public function showPosts()
    {
        // Obtén el usuario autenticado
        $user = auth()->user();

        // Obtén todos los divs que quieres mostrar (por ejemplo, de una tabla 'divs')
        $posts = Post::all();

        // Obtén los likes del usuario autenticado
        $favs = $user->favs->pluck('post_id')->toArray(); // Extrae los IDs de los divs a los que el usuario dio like

        // Pasa los divs y los likes a la vista
        return view('post.listar', compact('posts', 'favs'));
}
}