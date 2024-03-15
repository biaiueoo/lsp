<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();
        
        //mengatur hak akses untuk admin
        Gate::define('admin-only', function ($user) {
            if ($user->level == 'admin'){
                return true;
            }
            return false;
        });

        //mengatur hak akses untuk operator
        Gate::define('operator-only', function ($operator) {
            if ($operator->level == 'operator'){
                return true;
            }
            return false;
        });

        //mengatur hak akses untuk pelanggan
        Gate::define('pelanggan-only', function ($pelanggan) {
            if ($pelanggan->level == 'pelanggan'){
                return true;
            }
            return false;
        });

        //mengatur hak akses untuk pemilik
        Gate::define('pemilik-only', function ($pemilik) {
            if ($pemilik->level == 'pemilik'){
                return true;
            }
            return false;
        });
    }
}
