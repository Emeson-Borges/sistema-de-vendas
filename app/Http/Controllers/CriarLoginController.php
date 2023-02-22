<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarLoginController extends Controller
{
    //
    public function auth(Request $request) {

        $credenciais = $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'firstName.required' => 'O campo nome é obrigatório',
            'lastName.required' => 'o campo sobrenome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O email não é válido',
            'password.required' => 'O campo senha é obrigatório',
           ]);

        if(Auth::attempt($credenciais, $request->remember)) {
            $request->session()->regenerate();
            
            return redirect()->intended('admin.dashboard');
            
        } else {
            return redirect()->back()->with('Erro', 'Email ou senha inválida.');
        }
}
