<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Providers\GateServiceProvider;
use App\Models\Produto;
use App\Models\User;
//use App\Providers\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check()){
            return redirect(route('login.form'));
        }

        $email = auth()->user()->email;
        $data = explode('@', $email);
        $servidorEmail = $data[1];

        if($servidorEmail != 'gmail.com') {
            return redirect(route('login.form'));
        }

        return $next($request);
    }
}
