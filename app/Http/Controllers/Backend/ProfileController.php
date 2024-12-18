<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Http\Requests\ProfileRequest;
use App\Models\Avatar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Persona;

class ProfileController extends Controller
{
    // public function updatePhoto(Request $request)
    // {
    //     $request->validate([
    //         'profile_photo_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
    //     ]);

    //     $user = Auth::user();

    //     // Eliminar la foto anterior si existe
    //     if ($user->profile_photo_path) {
    //         Storage::delete('public/' . $user->profile_photo_path);
    //     }

    //     // Subir la nueva foto
    //     $path = $request->file('profile_photo_path')->store('profile_photo_path', 'public');

    //     // Guardar la nueva ruta en la base de datos
    //     $user->profile_photo = $path;
    //     //$user->save();

    //     return redirect()->back()->with('success', 'Foto de perfil actualizada con éxito.');
    // }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function edit(Request $request)
    // {
    //     return view('profile.edit')->with([
    //         'user' => $request->user(),
    //     ]);
    // }

    // public function update(ProfileRequest $request)
    // {
    //     $user = $request->user();
    // }
    public function index()
    {
        $grado = DB::table('grados')->where('id_grado', DB::table('servidores')->where('persona_id', Auth::user()->persona_id)->first()->grado_id)->first()->descripcion_grado;
        $especialidad = DB::table('especialidades')->where('id_especialidad', DB::table('servidores')->where('persona_id', Auth::user()->persona_id)->first()->especialidad_id)->first()->descripcion_especialidad;
        $nombres = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->nombres;
        $primer_apellido = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->primer_apellido;
        $segundo_apellido = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->segundo_apellido;
        $carnet_identidad = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->carnet_identidad;
        $fecha_nacimiento = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->fecha_nacimiento;
        $telefono = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->telefono;
        $lugar_nacimiento = DB::table('municipios')->where('id_municipio', DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->municipio_id)->first()->municipio;
        $genero = DB::table('generos')->where('id_genero', DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->genero_id)->first()->descripcion_genero;
        $condicion = DB::table('condiciones')->where('id_condicion', DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->condicion_id)->first()->condicion;
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $foto = DB::table('avatares')->where('id_avatar', DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->avatar_id)->first()->path_picture;
        //dd($foto);
        $datos = [
            'grado' => $grado,
            'especialidad' => $especialidad,
            'nombres' => $nombres,
            'primer_apellido' => $primer_apellido,
            'segundo_apellido' => $segundo_apellido,
            'carnet_identidad' => $carnet_identidad,
            'fecha_nacimiento' => $fecha_nacimiento,
            'telefono' => $telefono,
            'lugar_nacimiento' => $lugar_nacimiento,
            'genero' => $genero,
            'condicion' => $condicion,
            'name' => $name,
            'email' => $email,
            'foto' => $foto,
        ];
        return view('profile.perfil')->with('datos',$datos);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $persona = Persona::find(Auth::user()->persona_id);
        //dd($request);
        if (!$user) 
        {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }
        if($request->hasFile('picture'))
        {
            $avatar = new Avatar();
            $foto = $request->picture;
            $nombre_foto = rand().'_'.$foto->getClientOriginalName();
            $foto->move(public_path('images/avatar'), $nombre_foto);
            $avatar->picture = $nombre_foto;
            $avatar->path_picture = '/images/avatar/'.$nombre_foto;
            $avatar->auth_user = $user->id;
            $avatar->save();
        }
        //dd($foto);
        $persona->telefono = $request->telefono;
        $persona->save();
        //return redirect()->back()->response()->json(['message' => 'Perfil actualizado correctamente']);
        return redirect()->back();
    }
}
