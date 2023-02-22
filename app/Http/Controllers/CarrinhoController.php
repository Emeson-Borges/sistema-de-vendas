<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Darryldecode\Cart\Exceptions\InvalidItemException;
use Darryldecode\Cart\Cart;
use Illuminate\Support\ServiceProvider;

use Darryldecode\Cart\Exceptions\InvalidConditionException;
use Darryldecode\Cart\Helpers\Helpers;
use Darryldecode\Cart\Validators\CartItemValidator;
use Darryldecode\Cart\Exceptions\UnknownModelException;


class CarrinhoController extends Controller
{
    //
    public function carrinhoLista(){
        //Retona o conteúdo do carrinho
       $itens = \Cart::getContent();
    
       return view('site.carrinho', compact('itens'));
       
    }
    
    
    public function adicionaCarrinho(Request $request){
       
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qty),
            'attributes' => array(
                'image' => $request->img
            )
            
        ]);

        return redirect()->route('site.carrinho')->with('Sucesso', 'Produto adicionado com sucesso');
    }

    public function removeCarrinho(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('Sucesso', 'Produto removido com sucesso');
    }

    public function atualizaCarrinho(Request $request){
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->quantity),
            ]
        ]);
        return redirect()->route('site.carrinho')->with('Sucesso', 'Produto atualizado com sucesso');
    }

    public function limparCarrinho(){
        \Cart::clear();
        return redirect()->route('site.carrinho')->with('Aviso', 'Carrinho Vazio, volte as compras');
    }
    
} 



