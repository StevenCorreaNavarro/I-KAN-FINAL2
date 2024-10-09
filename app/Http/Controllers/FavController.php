<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fav;
use App\Models\Post;

class FavController extends Controller
{
    //
    public function store(Request $request)
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
        $posts = Fav::all();

        // Obtén los likes del usuario autenticado
        $favs = $user->favs->pluck('post_id')->toArray(); 
        // Extrae los IDs de los divs a los que el usuario dio like
        $favs = auth()->user()->favs;

        // Pasa los divs y los likes a la vista
        return view('favoritos.fav', compact('posts', 'user','favs'));
    }
}
