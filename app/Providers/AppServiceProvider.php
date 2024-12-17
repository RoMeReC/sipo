<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\UserPolicy;

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
    }
}

