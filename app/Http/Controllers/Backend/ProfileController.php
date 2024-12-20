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
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $grado = DB::table('grados')->where('id_grado', DB::table('servidores')->where('persona_id', Auth::user()->persona_id)->first()->grado_id)->first()->descripcion_grado;
        $especialidad = DB::table('especialidades')->where('id_especialidad', DB::table('servidores')->where('persona_id', Auth::user()->persona_id)->first()->especialidad_id)->first()->descripcion_especialidad;
        $nombres = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->nombres;
        $primer_apellido = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->primer_apellido;
        $segundo_apellido = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->segundo_apellido;
        $carnet_identidad = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->carnet_identidad;
        $fecha_nacimiento = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->fecha_nacimiento;
        $celular = DB::table('personas')->where('id_persona',Auth::user()->persona_id)->first()->celular;
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
            'celular' => $celular,
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

        if (!$user) 
        {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }

        // Inicializa una bandera para detectar cambios
        $cambios = false;
        //dd($persona->celular);
        // Comparar el número de teléfono
        if ((int) $request->celular !== $persona->celular) 
        {
            $request->validate([
                'celular' => ['required', 'celular'],
            ]);
            $persona->celular = $request->celular;
            $cambios = true;
        }
        // Comparar la imagen (si fue actualizada)
        if ($request->hasFile('picture')) 
        {
            $avatar = new Avatar();
            $foto = $request->file('picture');
            $nombre_foto = rand() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('images/avatar'), $nombre_foto);
            $avatar->picture = $nombre_foto;
            $avatar->path_picture = '/images/avatar/' . $nombre_foto;
            $avatar->auth_user = $user->id;
            $avatar->save();

            $lastAvatar = Avatar::latest('id_avatar')->first();
            $persona->avatar_id = $lastAvatar->id_avatar;
            $cambios = true;
        }
        
        // Guardar solo si hubo cambios
        if ($cambios) 
        {
            $persona->save();
            return redirect()->back()->with('success', 'Perfil actualizado correctamente.');
        }

        // Si no hubo cambios
        return redirect()->back()->with('info', 'No se realizaron cambios en su perfil.');
    }

    public function password()
    {
        return view('profile.password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password_actual' => ['required', 'password_actual'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required','confirmed','min:8'],
        ]);
    
        $user = Auth::user();
        
        if (!$request->filled('password_actual') || !Hash::check($request->password_actual, Auth::user()->password)) 
        {
            return redirect()->back()->withErrors(['password_actual' => 'La contraseña actual es incorrecta.']);
        }
    
        if (Hash::check($request->password, $user->password)) 
        {
            return redirect()->back()->withErrors(['repeatPassword' => 'La nueva contraseña no puede ser igual a la contraseña actual.']);
        }
    
        $user->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'Contraseña actualizada correctamente.');
    }
    
}
