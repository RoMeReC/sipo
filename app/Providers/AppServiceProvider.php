<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // Aquí puedes mapear tus políticas, si tienes alguna, como:
        // User::class => UserPolicy::class,
    ];

    /**
     * Register any application policies.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies(); // Este método es válido dentro de esta clase

        // Define tus Gates aquí, si es necesario:
        Gate::define('is-superadministrador', function ($user) {
            return $user->rol_id === 1;
        });

        Gate::define('is-administrador', function ($user) {
            return $user->rol_id === 2;
        });

        Gate::define('is-usuario', function ($user) {
            return $user->rol_id === 3;
        });

        Validator::extend('nombres', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[\pL\s]+$/u', $value); // Valida que no acepta números ni caracteres especiales.
        });

        Validator::replacer('nombres', function ($message, $attribute, $rule, $parameters) {
            return 'El campo ' . $attribute . ' debe contener solo letras';
        });

        Validator::extend('carnet_identidad', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^(?=.*[0-9])(?=.*\W)$/', $value); // Valida que no acepta números ni caracteres especiales.
        });
    
        Validator::replacer('carnet_identidad', function ($message, $attribute, $rule, $parameters) {
            return 'El campo ' . $attribute . ' debe contener solo letras.';
        });        

        Validator::extend('celular', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^\d{8}$/', $value); // Valida que sea un número de 8 dígitos.
        });

        Validator::replacer('celular', function ($message, $attribute, $rule, $parameters) {
            return 'El campo ' . $attribute . ' debe ser un número de celular válido con 8 dígitos.';
        });

        Validator::extend('password_actual', function ($attribute, $value, $parameters, $validator) {
            // Verifica si hay un usuario autenticado
            $user = Auth::user();
            if (!$user) {
                return false; // Si no hay usuario, devuelve false.
            }
    
            // Compara la contraseña ingresada con la almacenada
            return Hash::check($value, $user->password);
        });
    
        Validator::replacer('password_actual', function ($message, $attribute, $rule, $parameters) {
            return "La contraseña actual es incorrecta.";
        });
    }
}

