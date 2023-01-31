@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')


<div class="row container">
    <div class="col s12 m6">
      <img src="{{$produto->image }}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h1> {{ $produto->nome }} </h1>
        <p> {{ $produto->descricao }} </p>
        <p> Postado por: {{ $produto->user->fistName }} <br> 
            Categoria: {{ $produto->categoria->nome }}
        </p>
        <button class="btn blue btn-large"> Comprar </button></button>
    </div>

</div>



@endsection