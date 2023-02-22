@if($mensagem = Session::get('Erro'))
  {{ $mensagem }}
@endif

@if($errors->any())
  @foreach($errors->all() as $error)
      {{ $error }} <br>
  @endforeach
@endif

<form action="{{ route('login.auth') }}" method="POST">
@csrf
<label for="email">Email</label>
<br> <input type="email" name="email"> <br>
<label for="senha">Senha</label>
<br> <input type="password" name="password"> <br>
<input type="checkbox" name="remember"> Lembrar-me <br>

<button type="submit"> Entrar </button>
<a href="{{ route('login.create')}}"> Crie seu login </a>
</form>