@extends('site.layout')
@section('title', 'home')
@section('conteudo')
 
{{-- Operador ternário --}}
{{--isset($nome) ? 'existe' : 'não existe' --}}
{{-- Estrutura de controle --}}
{{-- unless ao contrario do if --}}
{{--auth/guest/switch/unless--}}

<div class="row container"> 

  @foreach ($produtos as $produto)
    
  <div class="col s12 m3">
     <div class="card"> 
        <div class="card-image">            
        <img src="{{  $produto->image }}">
        <a href="{{ route('site.details', $produto->slug)}} " class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
        <span class="card-title">{{ $produto->nome }}</span>
        <p>{{ Str::limit($produto->descricao, 100) }}</p>
        </div>
     </div>
   </div>

  @endforeach 
</div>

<div class="row center">
  {{ $produtos->links('custom.pagination') }}
</div>
@endsection
