<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function produtos() {
      
                    //hasMany quer dizer que tem muitos em uma relação
        return $this->hasMany(Produto::class, 'id_categoria', 'id');
    }

}
