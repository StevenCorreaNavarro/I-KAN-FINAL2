<?php

namespace App\Http\Controllers;  //// reconocedor de controladores
use App\Models\Home;
use App\Models\Curso;
use App\Models\Registro; 
use App\Models\Store;              //crear esta parte 
use App\Models\Usuario;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Socialite;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// git remote add origin https://github.com/StevenCorreaNavarro/example-app.git
// Route::get('/', function () {           //http://localhost/example-app/example-app/public/mejos
//     return view('homess');
// });

/*ruta controlador i kan */
Route::get('/profile',[UsuarioController::class,'profile'])->name('profile.home');
Route::get('/homes',[UsuarioController::class,'alert'])->name('home.home');
Route::get('/home',[UsuarioController::class,'create'])->name('home.home');
Route::get('/',[UsuarioController::class,'create'])->name('home.home');
Route::post('home/store', [UsuarioController::class,'store'])->name('home.store');
Route::get('usuario/listar',[UsuarioController::class,'listar'])->name('usuario.listar');
// Route::get('usuario/create',[UsuarioController::class,'create'])->name('usuario.create');

//Route::post('usuario/store', [UsuarioController::class,'store'])->name('usuario.store');
Route::get('usuario/{usuario}',[UsuarioController::class,'show'])->name('usuario.show');
Route::put('usuario/{usuario}',[UsuarioController::class,'update'])->name('usuario.update'); //actualizacion de datos
Route::delete('usuario/{usuario}',[UsuarioController::class,'destroy'])->name('usuario.destroy');
Route::get('usuario/{usuario}/editar',[UsuarioController::class,'edit'])->name('usuario.edit');   //actualizacion de datos
Route::get('estilocasual',[UsuarioController::class,'casual'])->name('casual');
Route::get('estiloclasico',[UsuarioController::class,'clasico'])->name('clasico');
Route::get('estilodeportivo',[UsuarioController::class,'deportivo'])->name('deportivo');
Route::get('estilourbano',[UsuarioController::class,'urbano'])->name('urbano');
Route::get('salida_amigos',[UsuarioController::class,'salida_amigos'])->name('salida_amigos');
Route::get('boda',[UsuarioController::class,'boda'])->name('boda');
Route::get('negocios',[UsuarioController::class,'negocios'])->name('negocios');
Route::get('noche_de_fiesta',[UsuarioController::class,'noche_fiesta'])->name('noche_fiesta');
Route::get('ocasion',[UsuarioController::class,'ocasion'])->name('ocasion');
Route::get('ocasion',[UsuarioController::class,'ocasion'])->name('ocasion');
Route::get('ubicacion',[UsuarioController::class,'ubicacion'])->name('ubicacion');
Route::get('tiendas_oficiales',[UsuarioController::class,'tiendas'])->name('tiendas');

Route::get('unidad/listar',[UnitController::class,'listardos'])->name('unit.listardos');
Route::post('unidad/storedos', [UnitController::class,'storedos'])->name('unit.storedos');

Route::get('prueba',[UnitController::class,'prueba'])->name('prueba.prueba'); 

Route::get('tiendas_oficiales',[UnitController::class,'listar'])->name('unit.listar');  
Route::get('unidad/create',[UnitController::class,'create'])->name('unit.create');
Route::post('unidad/store', [UnitController::class,'store'])->name('unit.store');
Route::get('unidad/{unit}', [UnitController::class, 'show'])->name('unit.show');
Route::put('unidad/{unit}',[UnitController::class,'update'])->name('unit.update');
Route::get('unidad/{unit}/editar',[UnitController::class,'edit'])->name('unit.edit');
Route::delete('unidad/{unit}',[UnitController::class,'destroy'])->name('unit.destroy');

//**************************************************************************** */

Route::get('slider-listar',[FotoPrincipalController::class,'listardos'])->name('slider.listar');  
Route::get('slider-create',[FotoPrincipalController::class,'create'])->name('slider.create');
Route::post('slider-store', [FotoPrincipalController::class,'store'])->name('slider.store');
// Route::get('unidad/{unit}', [FotoPrincipalController::class, 'show'])->name('unit.show');
Route::put('slider/{post}',[FotoPrincipalController::class,'update'])->name('slider.update');
Route::get('slider/{post}/editar',[FotoPrincipalController::class,'edit'])->name('slider.edit');
// Route::delete('unidad/{unit}',[FotoPrincipalController::class,'destroy'])->name('unit.destroy');

//+++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('post/fav',[PostController::class,'listartres'])->name('post.listartres');
Route::get('post/listar',[PostController::class,'listardos'])->name('post.listardos');
// Route::get('post/favoritos',[PostController::class,'favoritos'])->name('post.favoritos');
Route::post('post/storedos', [PostController::class,'storedos'])->name('post.storedos');
Route::get('prueba',[PostController::class,'prueba'])->name('prueba.prueba'); 
Route::get('post',[PostController::class,'listar'])->name('post.listar');  

// Route::get('post-creado', function () {
//     Alert::success(' Titulo de la alerta','mensaje de la alerta');     
//     return view('post.listar');
// })->middleware('auth');

Route::get('post/create',[PostController::class,'create'])->name('post.create');
Route::post('post/store', [PostController::class,'store'])->name('post.store');
// Route::post('fav', [PostController::class,'stores'])->name('post.stores');
// Route::post('post/favoritos', [PostController::class,'favoritos']);
Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');
Route::put('post/{post}',[PostController::class,'update'])->name('post.update');
Route::get('post/{post}/editar',[PostController::class,'edit'])->name('post.edit');
Route::delete('post/{post}',[PostController::class,'destroy'])->name('post.destroy');
Route::get('/favs/{post}', [PostController::class, 'showPosts'])->name('fav.show');

//+++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('curso/listar',[CursoController::class,'listar'])->name('curso.listar');
Route::get('curso/create',[CursoController::class,'create'])->name('curso.create');
Route::post('curso/store', [CursoController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update'); //actualizacion de datos
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');

Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');   //actualizacion de datos

use App\Http\Controllers\OccasionController;
use App\Models\Fav;

Route::get('/ocasiones', [ChanceController::class, 'index'])->name('occasions.index');
Route::post('/occasions/select/{id}', [ChanceController::class, 'select'])->name('occasions.select');
Route::get('/occasions', [ChanceController::class, 'index'])->name('occasions.index');
Route::post('/occasions/select/{id}', [ChanceController::class, 'select'])->name('occasions.select');
Route::get('/occasions/{id}', [ChanceController::class, 'show'])->name('occasions.show');

Route::post('/fav', [FavController::class, 'store'])->name('fav.store');
Route::get('/fav/{user}', [FavController::class, 'showPosts'])->name('fav.show');
// Route::get('/fav', [FavController::class, 'store'])->name('fav.store');

// Route::post('/favoritos', [PostController::class, 'listartres'])->name('listatres.stores');
// Route::get('/favs/{fav}', [PostController::class, 'showPosts'])->name('fav.show');
// Route::post('/favs', [PostController::class, 'stores'])->name('fav.stores');
// Route::get('/favs/{fav}', [PostController::class, 'showPosts'])->name('fav.show');
// route::get('login',[Logincontroller::class,'iniciar']);
// route::post('login/store',[LoginController::class,'store'])->name ('login.store');

use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/ing', [HomeController::class,'index'])->middleware('auth');
Route::get('/ingreso', [HomeController::class,'entrar'])->middleware('auth');
Route::get('/profileupdate', [HomeController::class,'update'])->middleware('auth');
// Route::get('register', [HomeController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [HomeController::class, 'register']);
// Route::get('/prueba', [HomeController::class,'prueba'])->middleware('auth');

Route::get('/post/listardos', function () {
    Alert::success(' Titulo de la alerta','mensaje de la alerta');     
    return view('post.listardos');
});

// Route::get('/homes', function () {
//     Alert::success('Ingresado con exito!','puedes explorar');      
//     return view('homess');
// })->middleware('auth');

Route::get('/ocasions', function () {
    Alert::success('Ingresado con exito!','puedes explorar');      
    return view('ocasion');
})->middleware('auth');

Route::get('/dashboard', function () {
    // Alert::success('Ingresado con exito!','mensaje de la alerta'); 
    return view('ocasion');
})->middleware('auth');

// Route::get('/profile', function () {
    
//     return view('profile');
// })->middleware('auth');

Route::get('/ubicacion', function () {
    return view('ubicacion');
})->middleware('auth');

Route::get('/admin', function () {
    return view('admin.layouts.app');
})->middleware(['auth', 'verified']);


Route::get('/ur', function () {
    return view('usuario.listar');
})->middleware(['auth', 'verified']);

// Route::get('/uregistro', function () {
//     return view('admin.users.registro');
// })->middleware(['auth', 'verified'])->name('users.create');



// Route::get('/prueba', function () {
//     return view('prueba');
// })->middleware('auth');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// routes/web.php
Route::get('/mivista', function () {
    return view('prueba'); // Aquí 'mi_vista' se refiere a 'resources/views/mi_vista.blade.php'
});




//----------------------------------------------------------------
// Route::get('/auth/google', function () {
//     return Socialite::driver('google')->redirect();
//     // return Socialite::driver('google')->scopes(['profile', 'email'])->redirect();


// });

// Route::get('/auth/google/callback', function () {
//     $googleUser = Socialite::driver('google')->user();

//     // Busca o crea un usuario en tu base de datos
//     $user = User::updateOrCreate([
//         'email' => $googleUser->getEmail(),
//     ], [
//         'name' => $googleUser->getName(),
//         'google_id' => $googleUser->getId(),
//     ]);

//     Auth::login($user);

//     return redirect('/home');
// });