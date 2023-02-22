<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriarLogin extends Model
{
    use HasFactory;

    protected $fillable = [
        'firsName',
        'lastName',
        'email',
        'password',

    ];

}
