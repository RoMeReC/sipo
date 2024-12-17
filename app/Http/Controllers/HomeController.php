<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Redirigir según el rol del usuario
        if (Auth::user()->rol_id === 1) {
            return redirect()->route('sadmin.dashboard');
        }
        if (Auth::user()->rol_id === 2) {
            return redirect()->route('admin.dashboard');
        }
        if (Auth::user()->rol_id === 3) {
            return redirect()->route('user.dashboard');
        }

        return view('home');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
