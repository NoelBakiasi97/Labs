<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('backoffice', function($user){
            return ($user->role_id==1 || $user->role_id==2 || $user->role_id==3 || $user->role_id==5);
        });
        Gate::define('sidebarCeo', function($user){
            return ($user->role_id==2);
        });
        Gate::define('sidebarAdminWebmaster', function($user){
            return ($user->role_id==1 || $user->role_id==3);
        });
        Gate::define('sidebarRedac', function($user){
            return ($user->role_id==3 || $user->role_id==5);
        });
        Gate::define('valide', function($user){
            return ($user->role_id==3);
        });
        Gate::define('affichage', function($user, $article){
            return ($user->role_id==3 || ($user->role_id==5 && $article->user_id==$user->id));
        });
        Gate::define('add', function($user){
            return ($user->role_id==3 || $user->role_id==5);
        });
        Gate::define('users', function($user, $role){
            return ($role->role->id>3);
        });
    }
}
