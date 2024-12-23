<?php

namespace App\Http\Controllers\Backend;

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
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class SuperAdminController extends Controller
{
    public function dashboard(){
        return view('sadmin.dashboard');
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
        return view('sadmin.listar-usuarios', ['info' => $info, 'departamentos' => $departamentos, 'grados' => $grados, 'especialidades' => $especialidades, 'condiciones' => $condiciones, 'generos' => $generos]);
    }

    public function agregar_usuario(Request $request)
    {
        $user = Auth::user();
        $persona = Persona::find(Auth::user()->persona_id);

        if (!$user) 
        {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }
        
        $request->validate([
            'celular' => ['required', 'celular'],
        ]);
        
        dd($request);
    }
}
