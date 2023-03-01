<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin',function(User $user){
            return $user->role === 'admin';
        });
        
        Gate::define('employee',function(User $user){
            return $user->role === 'employee';
        });

        Gate::define('user',function(User $user){
            return $user->role === 'user';
        });

        Paginator::useBootstrap();
    }
}
