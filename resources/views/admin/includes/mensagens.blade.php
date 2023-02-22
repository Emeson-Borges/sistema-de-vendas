@if ($mensagem = Session::get('Sucesso'))
     
<div class="card green">
  <div class="card-content white-text">
    <span class="card-title">Sucesso</span>
    <p>{{ $mensagem }}</p>
  </div>
</div>

@endif