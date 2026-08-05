<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'Favoritos';
    public $timestamps = false;
    protected $fillable = ['produto_id',];
}
