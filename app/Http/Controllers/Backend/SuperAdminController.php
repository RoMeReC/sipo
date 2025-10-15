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
use App\Models\Gguu;
use App\Models\Avatar;
use App\Models\PUsuario;
use App\Models\Undd;
use Faker\Provider\ar_EG\Person;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\New_;

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

    //public function getProvincias($departamentoId)
    //{
    //    $provincias = Provincia::where('departamento_id', $departamentoId)->get();
    //    return response()->json($provincias);
    //}

    public function getProvincias($departamentoId)
    {
        $provincias = Provincia::where('departamento_id', $departamentoId)->get();
        return response()->json($provincias);
    }

    //public function getMunicipios($provinciaId)
    //{
    //    $municipios = Municipio::where('provincia_id', $provinciaId)->get();
    //    return response()->json($municipios);
    //}

    public function getMunicipios($provinciaId)
    {
        $municipios = Municipio::where('provincia_id', $provinciaId)->get();
        return response()->json($municipios);
    }
    //public function getUUDD($gguuId)
    //{
    //    $uudd = Undd::where('gguu_id', $gguuId)->get();
    //    return response()->json($uudd);
    //}

    public function getUUDD($gguuId)
    {
        $uudds = Undd::where('gguu_id', $gguuId)->get(['id_uudd', 'descripcion_uudd']);
        return response()->json($uudds);
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
            $email = ['email' =>User::find($users[$i]->id)->email];
            $id_rol = ['id_rol' =>User::find($users[$i]->id)->rol_id];
            $id_persona = ['id_persona' => User::find($users[$i]->id)->persona_id];
            $avatar = ['avatar' => DB::table('avatares')->where('id_avatar',DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->avatar_id)->first()->path_picture];
            $grado = ['grado' => DB::table('grados')->where('id_grado', DB::table('servidores')->where('persona_id',User::find($users[$i]->id)->persona_id)->first()->grado_id)->first()->grado];
            $id_grado = ['id_grado' => DB::table('servidores')->where('persona_id',User::find($users[$i]->id)->persona_id)->first()->grado_id];
            $id_especialidad = ['id_especialidad' => DB::table('servidores')->where('persona_id',User::find($users[$i]->id)->persona_id)->first()->especialidad_id];
            $especialidad = ['especialidad' => DB::table('especialidades')->where('id_especialidad', DB::table('servidores')->where('persona_id',User::find($users[$i]->id)->persona_id)->first()->especialidad_id)->first()->especialidad];
            $p_apellido = ['primer_apellido' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->primer_apellido];
            $s_apellido = ['segundo_apellido' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->segundo_apellido];
            $primer_apellido = DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->primer_apellido;
            $segundo_apellido = DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->segundo_apellido;
            $apellidos = ['apellidos' => $primer_apellido.' '.$segundo_apellido];
            $nombres = ['nombres' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->nombres];
            $nuudd = ['nuudd' => DB::table('uudds')->where('id_uudd',DB::table('servidores')->where('persona_id',User::find($users[$i]->id)->persona_id)->first()->uudd_id)->first()->uudd];
            $username = ['username' => User::find($users[$i]->id)->name];
            $rol = ['rol' => DB::table('roles')->where('id_rol',User::find($users[$i]->id)->rol_id)->first()->rol];
            $id_genero = ['id_genero' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->genero_id];
            $carnet_identidad = ['carnet_identidad' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->carnet_identidad];
            $fecha_nacimiento = ['fecha_nacimiento' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->fecha_nacimiento];

            $id_condicion = ['id_condicion' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->condicion_id];
            $celular = ['celular' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->celular];
            
            $personaId = User::find($users[$i]->id)->persona_id;
            // Obtener todos los roles disponibles en el sistema
            $rolesTotales = Rol::pluck('id_rol')->toArray(); // [1,2,3]
            // Obtener los roles que ya tiene la persona mediante sus usuarios
            $rolesAsignados = User::where('persona_id', $personaId)->pluck('rol_id')->toArray(); // [1,2]
            // Calcular roles disponibles (los que aún no tiene)
            $rolesDisponiblesIds = array_values(array_diff($rolesTotales, $rolesAsignados)); // [3]
            // Opcional: Obtener los nombres de los roles disponibles
            $rolesDisponibles = Rol::whereIn('id_rol', $rolesDisponiblesIds)->get()->pluck('rol', 'id_rol'); // [3 => 'usuario']
            $permisosAsignados = PUsuario::where('usuario_id', $id)->pluck('permiso_id')->toArray(); // [1,2]

            $gguu = ['gguu' => DB::table('gguus')->where('id_gguu',DB::table('uudds')->where('id_uudd', DB::table('servidores')->where('persona_id', DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->id_persona)->first()->uudd_id)->first()->gguu_id)->first()->id_gguu];
            $uudd = ['uudd' => DB::table('uudds')->where('id_uudd', DB::table('servidores')->where('persona_id', DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->id_persona)->first()->uudd_id)->first()->id_uudd];
            $id_municipio = ['id_municipio' => DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->municipio_id];
            $id_provincia = ['id_provincia' => DB::table('provincias')->where('id_provincia',DB::table('municipios')->where('id_municipio', DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->municipio_id)->first()->provincia_id)->first()->id_provincia];
            $id_departamento = ['id_departamento' => DB::table('departamentos')->where('id_departamento',DB::table('provincias')->where('id_provincia',DB::table('municipios')->where('id_municipio', DB::table('personas')->where('id_persona',User::find($users[$i]->id)->persona_id)->first()->municipio_id)->first()->provincia_id)->first()->departamento_id)->first()->id_departamento];
            $activo = ['activo' => User::find($users[$i]->id)->activo];
            $datos[$i] = Arr::collapse([$id,$id_persona,$email,$id_rol,$avatar,$id_grado,$id_especialidad,$grado,$especialidad,$p_apellido,$s_apellido,$apellidos,$nombres,$nuudd,$username,$rol,$activo,$id_persona,$id_genero,$carnet_identidad,$fecha_nacimiento,$id_condicion,$celular,['roles_disponibles' => $rolesDisponibles],$uudd,$gguu,$id_departamento,$id_provincia,$id_municipio,['permisos_asignados' => $permisosAsignados]]);
            $info[$i] = $datos[$i];
            
        }
        //dd($info);
        $departamentos = Departamento::all();
        $grados = Grado::all();
        $especialidades = Especialidad::all();
        $condiciones = Condicion::all();
        $generos = Genero::all();
        $roles = Rol::all();
        $permisos = Permiso::all();
        $gguus = Gguu::all();
        return view('sadmin.listar-usuarios', ['avatarPath' => $avatarPath, 'info' => $info, 'departamentos' => $departamentos, 'grados' => $grados, 'especialidades' => $especialidades, 'condiciones' => $condiciones, 'generos' => $generos, 'roles' => $roles, 'permisos' => $permisos, 'gguus' => $gguus]);
    }

    public function nuevo_usuario(Request $request)
    {
        //dd($request);
        $user = Auth::user();
        $persona = Persona::find(Auth::user()->persona_id);
        if (!$user) 
        {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }
        $request->validate([
            'gguu' => ['required'],
            'uudd' => ['required'],
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
        ]);
        $identidad=Persona::where('carnet_identidad',$request->carnet_identidad)->get();
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
        if(intval($request->rol)==1)
        {
            $nuevo_usuario->name = "sa".strtolower($nombres).strtolower(str_replace(" ", "", $request->primer_apellido)).strtolower(Str::substr($request->segundo_apellido,0,1));        
        }
        elseif(intval($request->rol)==2)
        {
            $nuevo_usuario->name = "adm".strtolower($nombres).strtolower(str_replace(" ", "", $request->primer_apellido)).strtolower(Str::substr($request->segundo_apellido,0,1));        

        }
        elseif(intval($request->rol)==3)
        {
            $nuevo_usuario->name = strtolower($nombres).strtolower(str_replace(" ", "", $request->primer_apellido)).strtolower(Str::substr($request->segundo_apellido,0,1));        

        }
        $nuevo_usuario->email = $request->email;
        $nuevo_usuario->password = Hash::make('AB'.$nuevo_usuario->name);
        $nuevo_usuario->persona_id = $lastPersona->id_persona;
        $nuevo_usuario->rol_id = intval($request->rol);
        $nuevo_usuario->activo = true;
        $nuevo_usuario->auth_user = $user->id;
        $nuevo_usuario->save();
        $lastUser = User::latest('id')->first();
        if(!empty($request->permisos))
        {
            $permisos = $request->permisos;
            for ($i = 0; $i < count($permisos); $i++) 
            {
                $permiso = new PUsuario();
                $permiso->usuario_id = $lastUser->id;
                $permiso->permiso_id = intval($permisos[$i]);
                $permiso->auth_user = $user->id;
                $permiso->activo = true;
                $permiso->save();
            }
        }
        $nuevo_servidor = new Servidor();
        $nuevo_servidor->persona_id = $lastPersona->id_persona;
        $nuevo_servidor->grado_id = $request->grado;
        $nuevo_servidor->especialidad_id = $request->especialidad;
        $nuevo_servidor->uudd_id = $request->uudd;
        $nuevo_servidor->save();
        return redirect()->back()->with('success', 'Usuario creado correctamente.');
    }

    public function activar($id)
    {
        $user = User::findOrFail($id);
        $user->activo = true;
        $user->save();

        return redirect()->back()->with('success', 'Usuario activado correctamente.');
    }

    public function desactivar($id)
    {
        $user = User::findOrFail($id);
        $user->activo = false;
        $user->save();

        return redirect()->back()->with('success', 'Usuario desactivado correctamente.');
    }

    public function agregar_usuario(Request $request)
    {
        $usuario = User::findOrFail($request->id);
        $persona = Persona::findOrFail($request->id_persona);
        $user = Auth::user();
        $nuevo_usuario = new User();
        $texto = explode(" ", $persona->nombres);
        $nombres = "";
        foreach($texto as $palabra)
        {
            $letra = str_split($palabra, 1);
            $nombres = $nombres . $letra['0'];
        }
        if(intval($request->rol_usuario)==1)
        {
            $nuevo_usuario->name = "sa".strtolower($nombres).strtolower(str_replace(" ", "", $persona->primer_apellido)).strtolower(Str::substr($persona->segundo_apellido,0,1));        
        }
        elseif(intval($request->rol_usuario)==2)
        {
            $nuevo_usuario->name = "adm".strtolower($nombres).strtolower(str_replace(" ", "", $persona->primer_apellido)).strtolower(Str::substr($persona->segundo_apellido,0,1));        
        }
        elseif(intval($request->rol_usuario)==3)
        {
            $nuevo_usuario->name = strtolower($nombres).strtolower(str_replace(" ", "", $persona->primer_apellido)).strtolower(Str::substr($persona->segundo_apellido,0,1));        
        }
        $nuevo_usuario->email = $usuario->email;
        $nuevo_usuario->password = Hash::make('AB'.$nuevo_usuario->name);
        $nuevo_usuario->persona_id = intval($request->id_persona);
        $nuevo_usuario->rol_id = intval($request->rol_usuario);
        $nuevo_usuario->activo = true;
        $nuevo_usuario->auth_user = $user->id;
        $nuevo_usuario->save();
        $lastUser = User::latest('id')->first();
        if(!empty($request->permisos))
        {
            $permisos = $request->permisos;
            for ($i = 0; $i < count($permisos); $i++) 
            {
                $permiso = new PUsuario();
                $permiso->usuario_id = $lastUser->id;
                $permiso->permiso_id = intval($permisos[$i]);
                $permiso->auth_user = $user->id;
                $permiso->activo = true;
                $permiso->save();
            }
        }
        return redirect()->back()->with('success', 'Usuario agregado correctamente.');
    }
    public function editar_usuario(Request $request)
    {
        //dd($request);
        $user_auth = Auth::user();
        //dd($user_auth->id);
        if (!$user_auth) {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }

        $request->validate([
            'gguu' => 'required|exists:gguus,id_gguu',
            'uudd' => 'required|exists:uudds,id_uudd',
            'grado' => ['required'],
            'especialidad' => ['required'],
            'nombres' => ['required', 'max:30'],
            'primer_apellido' => ['required', 'max:25'],
            'segundo_apellido' => ['required', 'max:25'],
            'genero' => ['required'],
            'carnet_identidad' => ['required', 'alpha_dash:ascii', 'max:15'],
            'condicion' => ['required'],
            'celular' => ['required', 'max:8'],
            'departamento' => ['required'],
            'provincia' => ['required'],
            'municipio' => ['required'],
            'fecha_nacimiento' => ['required', 'date'],
            'email_editar' => ['required', 'email']
        ]);

        // Se obtiene el usuario actual mediante Eloquent
        $user = User::find(intval($request->id_user));

        if (!$user) {
            return redirect()->back()->with('danger', 'Usuario no encontrado.');
        }

        // Se verifica si cambió el correo electrónico
        if ($user->email !== $request->email_editar) {
            // Se verifica si el nuevo correo ya pertenece a otra persona distinta
            $email_existente = User::where('email', $request->email_editar)
                ->where('persona_id', '!=', $user->persona_id)
                ->exists();
            if ($email_existente) {
                return redirect()->back()->with('danger', 'El correo electrónico ya está asociado a otra persona.');
            }
            // Se actualiza el correo en todos los usuarios de la misma persona
            User::where('persona_id', $user->persona_id)
                ->update(['email' => $request->email_editar]);
            // Se actualiza el objeto actual en memoria (por coherencia)
            //$user->email = $request->email_editar;
        }
        $persona = Persona::find(intval($request->id_persona_editar));
        // Se verifica si cambió el carnet de identidad
        if ($persona->carnet_identidad !== $request->carnet_identidad) 
        {
            // Se verifica si el nuevo carnet ya pertenece a otra persona distinta
            $carnet_existente = Persona::where('carnet_identidad', $request->carnet_identidad)
            ->where('id_persona', '!=', $persona->id_persona)
            ->exists();
            if ($carnet_existente) 
            {
                return redirect()->back()->with('danger', 'El Carnet de Identidad ya está asociado a otra persona.');
            }
            // Se actualiza el correo en todos los usuarios de la misma persona
            Persona::where('id_persona', $persona->id_persona)
                ->update(['carnet_identidad' => $request->carnet_identidad]);
        }
        Persona::where('id_persona', $persona->id_persona)
                ->update([
                    'nombres' => $request->nombres, 
                    'primer_apellido' => $request->primer_apellido, 
                    'segundo_apellido' => $request->segundo_apellido, 
                    'fecha_nacimiento' => $request->fecha_nacimiento, 
                    'celular' => $request->celular, 
                    'condicion_id' => intval($request->condicion), 
                    'genero_id' => intval($request->genero), 
                    'municipio_id' => intval($request->municipio),
                    'auth_user' => $user_auth->id,
                    'updated_at' => \Carbon\Carbon::now()
            ]);
        Servidor::where('persona_id',$persona->id_persona)
                 ->update([
                    'grado_id'=> $request->grado,
                    'especialidad_id' => $request->especialidad,
                    'uudd_id' => $request->uudd,
                    'auth_user' => $user_auth->id,
                    'updated_at' => \Carbon\Carbon::now()
                 ]);
        
        $userId = $request->id_user;
        $permisosSeleccionados = $request->input('permisos', []); // puede venir vacío
        $authUserId = Auth::id(); // usuario que realiza la edición

        // 1️⃣ Eliminar los permisos anteriores (soft delete si usas SoftDeletes)
        PUsuario::where('usuario_id', $userId)->delete();

        // 2️⃣ Insertar los nuevos permisos seleccionados
        foreach ($permisosSeleccionados as $permisoId) {
            PUsuario::create([
                'usuario_id' => $userId,
                'permiso_id' => $permisoId,
                'auth_user'  => $authUserId,
                'activo'     => true,
            ]);
        }

        return redirect()->back()->with('success', 'Datos actualizados para todos los usuarios de la misma persona.');
    }
}
