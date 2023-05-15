<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

use App\Models\User;
//use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define("admin", function(User $user){
            return $user->hasRole("Admin");
        });

        Gate::define("manager", function(User $user){
            return $user->hasRole("Manager");
        });

        Gate::define("employe", function(User $user){
            return $user->hasRole("Employé");
        });

        Gate::after(function(User $user){
            return $user->hasRole("SuperAdmin");
        });
    }
}
