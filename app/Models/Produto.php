<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'Produtos';
    public $timestamps = false;
    protected $fillable = ['nome', 'descricao', 'preco'];
}
