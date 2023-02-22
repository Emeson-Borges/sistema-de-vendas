<?php

namespace App\Providers;
namespace App\Providers\GateServiceProvider;
//namespace App\Providers\AppServiceProvider;


use Illuminate\Support\Facades\Gate;
//use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\ServiceProvider;
use App\Providers\GateServiceProvider;
use App\Models\Categoria;


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
        //
        // $categoriasMenu = Categoria::all();
        // view()->share('categoriasMenu', $categoriasMenu);
    
        
    }
}
