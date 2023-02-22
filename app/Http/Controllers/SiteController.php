<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Providers\GateServiceProvider;
use Illuminate\Support\Str;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\View;

class SiteController extends Controller
{
    //
    public function index(){
        
        //
        $produtos = Produto::paginate(3);
        return view('site.home', compact('produtos'));

        
        
    }

    public function details($slug){

        $produto = Produto::where('slug', $slug)->first();

        //Gate::authorize('ver-produto', $produto);
        
        //User o Policy ao inves do Gate
        //$this->authorize('verProduto', $produto);

        if(Gate::allows('ver-produto', $produto)) {
            return view('site.details', compact('produto'));
        }

        if(Gate::denies('ver-produto', $produto)) {
            return redirect()->route('site.index');
        }

        return view('site.details', compact('produto'));
    }

    public function categoria($id){
        
       
        $categoria = Categoria::find($id);
        
        
        $produtos = Produto::where('id_categoria', $id)->paginate(8);
        return view('site.categoria', compact('produtos', 'categoria'));
        

        
    }
}
