<?php

namespace App\Providers;
namespace App\Providers\GateServiceProvider;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Policies\PostPolicy;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Facade;
//use Illuminate\Support\Facades\Gate;
use App\Providers\GateServiceProvider;
use App\Models\Produto;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use App\Models\Categoria;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Produto' => 'App\Policies\ProdutoPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('ver-produto', function(User $user, Produto $produto) {
            return $user->id === $produto->id_user;  
        });

        //
    }
}
