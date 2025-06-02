<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Cambiamos el identificador del login de email a name
     */
    public function username()
    {
        return 'name';
    }

    /**
     * Modificamos las credenciales para incluir que esté activo
     */
    protected function credentials(Request $request)
    {
        return [
            'name' => $request->get('name'),
            'password' => $request->get('password'),
            'activo' => true, // solo permite usuarios activos
        ];
    }

    /**
     * Si quieres hacer algo después de autenticación, puedes usar esto.
     */
    protected function authenticated(Request $request, $user)
    {
        // Aquí puedes poner acciones después del login si lo deseas.
        // Por ejemplo: loguear el acceso, enviar notificaciones, etc.
    }

    /**
     * Personaliza el mensaje cuando falla el login
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw \Illuminate\Validation\ValidationException::withMessages([
            'name' => [trans('auth.failed')],
        ]);
    }
}
