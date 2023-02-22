@extends('login.layout')
@section('titulo', 'Resgistrar')
@section('conteudo')

@if($errors->any())
  @foreach($errors->all() as $error)
      {{ $error }} <br>
  @endforeach
@endif
<a href="#" class="center brand-logo " href="index.html"><img src="{{asset('img/credcarius.png')}}"></a>
<form action="{{ route('users.store') }}" method="POST">
@csrf
<label for="nome">Nome*</label>
 <br> <input type="text" name="firstName" placeholder="Informe seu nome"> <br>
<label for="sobrenome">Sobrenome*</label>
 <br> <input type="text" name="lastName" placeholder="Informe seu sobrenome"> <br>
<label for="email">Email*</label>
 <br> <input type="email" name="email" placeholder="Seu email por favor"> <br>
<label for="senha">Senha*</label>
 <br> <input type="password" name="password" placeholder="Agora escolha uma senha segura"> <br><br>
 

<button type="submit"> Cadastrar </button>
<a href="{{ route('login.form') }}"> Voltar para o login </a>
</form>

@endsection