<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        return view('profile.perfil');
    }
}
