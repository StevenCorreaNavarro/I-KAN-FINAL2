<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Usuario;
use App\Models\User;
use App\Models\Fotoprincipal;
use Illuminate\Http\Request;

class UsuarioController extends Controller

{
    


    public function alert()
    {
        $sliders = FotoPrincipal::orderBy('id', 'desc')->get();
        Alert::success('Ingresado con exito!', 'puedes explorar');
        return view('homess', compact('sliders'));
    }
    public function listar()
    {
        $usuarios = Usuario::orderBy('id', 'desc')->get();

        return view('usuario.listar', compact('usuarios', 'posts'));
    }

    public function create()
    { // crear formulario
        //return view('usuario.create');
        $sliders = FotoPrincipal::orderBy('id', 'desc')->get();
        return view('homess', compact('sliders'));
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();
        //return $usuario;
        //return redirect()->route('usuario.listar');        // para llevar al la lista o direccionar
        return redirect()->route('home.home');   //este es el nombre de la ruta
    }


    public function show(Usuario $usuario)
    { //$id
        // $curso=Curso::find($id);
        return view('usuario.show', compact('usuario'));
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario.listar');
    }

    //Edit
    public function edit(Usuario $usuario)
    { //Encuentro el Curso
        return view('usuario.edit', compact('usuario'));
    }

    //Update
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();
        return redirect()->route('usuario.listar');
    }

    // /*edit */
    // public function edit(Usuario $usuario){   //Encuentro el usuario

    //     return view('usuario.edit', compact('usuario'));
    // }

    // //Update
    // public function update(Request $request, Usuario $usuario)
    // {

    //     $usuario->name = $request->name;
    //     $usuario->descripcion = $request->descripcion;
    //     $usuario->save();

    //     return redirect()->route('usuario.listar');
    // }

    public function ubicacion()
    {
        return view('ubicacion');
    }
    public function home()
    {
        return view('home');
    }
    public function ocasion()
    {
        return view('ocasion');
    }

    public function casual()
    {
        return view('estilo_casual');
    }
    public function deportivo()
    {
        return view('estilo_deportivo');
    }
    public function urbano()
    {
        return view('estilo_urbano');
    }
    public function clasico()
    {
        return view('estilo_clasico');
    }

    public function tiendas()
    {
        return view('tiendas');
    }

    public function salida_amigos()
    {
        return view('ocasion_salida_amigos');
    }
    public function boda()
    {
        return view('ocasion_boda');
    }
    public function negocios()
    {
        return view('ocasion_negocios');
    }
    public function noche_fiesta()
    {
        return view('ocasion_noche_de_fiesta');
    }

    public function profile()
    {
        $usuarios = User::orderBy('id', 'desc')->get();
        return view('profile', compact('usuarios'));
    }

}
