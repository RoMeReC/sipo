<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Grado;
use App\Models\Especialidad;
use App\Models\Condicion;
use App\Models\Genero;
use App\Models\Persona;
use App\Models\Servidor;
use App\Models\Provincia;
use App\Models\Municipio;
use App\Models\Departamento;
use App\Models\Rol;
use App\Models\Permiso;
use App\Models\Avatar;
use Faker\Provider\ar_EG\Person;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $avatarPath = DB::table('avatares')
        ->where('id_avatar', DB::table('personas')->where('id_persona', $user->persona_id)->first()->avatar_id)
        ->value('path_picture');
       return view('sadmin.dashboard',['avatarPath' => $avatarPath]);
    }

    public function getProvincias($departamentoId)
    {
        $provincias = Provincia::where('departamento_id', $departamentoId)->get();
        return response()->json($provincias);
    }

    public function getMunicipios($provinciaId)
    {
        $municipios = Municipio::where('provincia_id', $provinciaId)->get();
        return response()->json($municipios);
    }

    public function listar_usuarios()
    {
        $user = Auth::user();
        $avatarPath = DB::table('avatares')
        ->where('id_avatar', DB::table('personas')->where('id_persona', $user->persona_id)->first()->avatar_id)
        ->value('path_picture');
        $users = User::all();
        $info=[];
        $cont = count($users);
        for($i=0;$i<$cont;$i++)
        {
            $id = ['id' =>User::find($users[$i]->id)->id];
            $id_persona = ['id_persona' => User::find($users[$i]->id)->persona_id];
            $grado = ['grado' => DB::table('grados')->where('id_grado', DB::table('servidores')->where('persona_id',User::find($users[$i]->id)->persona_id)->first()->grado_id)->first()->grado];
            $especialidad = ['especialidad' => DB::table('especialidades')->where('id_especialidad', DB::table('servidores')->where('persona_id',User::find($users[$i]->id)->persona_id)->first()->especialidad_id)->first()->especialidad];
            $primer_apellido = DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->primer_apellido;
            $segundo_apellido = DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->segundo_apellido;
            $apellidos = ['apellidos' => $primer_apellido.' '.$segundo_apellido];
            $nombres = ['nombres' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->nombres];
            $username = ['username' => User::find($users[$i]->id)->name];
            $rol = ['rol' => DB::table('roles')->where('id_rol',User::find($users[$i]->id)->rol_id)->first()->rol];
            $datos[$i] = Arr::collapse([$grado,$especialidad,$apellidos,$nombres,$username,$rol]);
            $info[$i] = $datos[$i];

        }
        $departamentos = Departamento::all();
        $grados = Grado::all();
        $especialidades = Especialidad::all();
        $condiciones = Condicion::all();
        $generos = Genero::all();
        $roles = Rol::all();
        $permisos = Permiso::all();
        return view('sadmin.listar-usuarios', ['avatarPath' => $avatarPath, 'info' => $info, 'departamentos' => $departamentos, 'grados' => $grados, 'especialidades' => $especialidades, 'condiciones' => $condiciones, 'generos' => $generos, 'roles' => $roles, 'permisos' => $permisos]);
    }

    public function agregar_usuario(Request $request)
    {
        dd($request);
        $user = Auth::user();
        //dd($user);
        $persona = Persona::find(Auth::user()->persona_id);
        //dd($persona);
        if (!$user) 
        {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }
        //
        /*$request->validate([
            'grado' => ['required'],
            'especialidad' => ['required'],
            'nombres' => ['required','nombres', 'max:30'],
            'primer_apellido' => ['required','nombres', 'max:25'],
            'segundo_apellido' => ['required','nombres', 'max:25'],
            'genero' => ['required'],
            'carnet_identidad' => ['required','alpha_dash:ascii','max:15'],
            'condicion' => ['required'],
            'celular' => ['required', 'celular','max:8'],
            'departamento' => ['required'],
            'provincia' => ['required'],
            'municipio' => ['required'],
            'fecha_nacimiento' => ['required', 'date'],
            'email' => ['required', 'email'],
            'rol' => ['required'],
        ]);*/
        //dd($request);
        //Verifica que la persona ya fue registrada
        $identidad=Persona::where('carnet_identidad',$request->carnet_identidad)->get();
        //dd($identidad);
        if(!$identidad->isEmpty())
        {
            return redirect()->back()->withInput()->with('danger', 'Persona ya registrada.');
        }
        $nuevo_avatar = false;
        if ($request->hasFile('picture')) 
        {
            $avatar = new Avatar();
            $foto = $request->file('picture');
            $nombre_foto = $request->carnet_identidad . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('images/avatar'), $nombre_foto);
            $avatar->picture = $nombre_foto;
            $avatar->path_picture = '/images/avatar/' . $nombre_foto;
            $avatar->auth_user = $user->id;
            dd($avatar);
            $avatar->save();
            $nuevo_avatar = true;
        }
        $nueva_persona = new Persona();
        $nueva_persona->nombres = $request->nombres;
        $nueva_persona->primer_apellido = $request->primer_apellido;
        $nueva_persona->segundo_apellido = $request->segundo_apellido;
        $nueva_persona->carnet_identidad = $request->carnet_identidad;
        $nueva_persona->primer_apellido = $request->primer_apellido;
        $nueva_persona->fecha_nacimiento = $request->fecha_nacimiento;
        $nueva_persona->celular = intval($request->celular);
        $nueva_persona->auth_user = $user->id;
        if($nuevo_avatar == true)
        {
            $lastAvatar = Avatar::latest('id_avatar')->first();
            $nueva_persona->avatar_id = $lastAvatar->id_avatar;
        }
        else
        {
            if(intval($request->genero) == 1)
            {
                $nueva_persona->avatar_id = 1;
            }
            elseif(intval($request->genero) == 2)
            {
                $nueva_persona->avatar_id = 2;
            }
        }
        $nueva_persona->condicion_id = intval($request->condicion);
        $nueva_persona->genero_id = intval($request->genero);
        $nueva_persona->municipio_id = intval($request->municipio);
        $nueva_persona->save();
        $lastPersona = Persona::latest('id_persona')->first();
        $nuevo_usuario = new User();
        $texto = explode(" ", $request->nombres);
        $nombres = "";
        foreach($texto as $palabra)
        {
            $letra = str_split($palabra, 1);
            $nombres = $nombres . $letra['0'];
        } 
        $nuevo_usuario->name = strtolower($nombres).strtolower(str_replace(" ", "", $request->primer_apellido)).strtolower(Str::substr($request->segundo_apellido,0,1));        
        $nuevo_usuario->email = $request->email;
        $nuevo_usuario->password = Hash::make($request->password);
        $nuevo_usuario->persona_id = $lastPersona;
        $nuevo_usuario->rol = intval($request->rol);
        
        dd("no existe");
    }
}
