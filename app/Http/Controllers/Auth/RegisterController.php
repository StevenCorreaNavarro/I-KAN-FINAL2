<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/homes';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {

        return Validator::make($data, [

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'profile_image' => ['nullable', 'image', 'max:2048']

        ]);

        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            $filename = time() . '.' . $request->profile_image->extension();
            $request->profile_image->move(public_path('profile_images'), $filename);
            $data['profile_image'] = $filename;
        }

        User::create($data);

        $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        // Crear el nuevo usuario después de la validación
        $user = $this->create($request->all());

        // Autenticar al usuario y redirigir
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'profile_image' => $data['profile_image'] ?? null,




        ]);

        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            $filename = time() . '.' . $request->profile_image->extension();
            $request->profile_image->move(public_path('profile_images'), $filename);
            $data['profile_image'] = $filename;
        }

        User::create($data);

        if (isset($data['profile_image'])) {
            // Guarda la imagen en la carpeta 'profile_images' dentro de 'storage/app/public'
            $imagePath = $data['profile_image']->store('profile_images', 'public');
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'profile_image' => $data['profile_image'] ?? null, // Guarda la imagen si se subió
        ]);

        // Autentica al usuario después de registrarlo
        // Auth::login($user);

        // Redirige o envía una respuesta
        return redirect()->route('home.home');
    }
}
