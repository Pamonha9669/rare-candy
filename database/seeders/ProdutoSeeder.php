<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Produto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        Produto::create([
            'nome' => 'Bolo de Chocolate',
            'descricao' => 'Bolo fofinho com cobertura de chocolate cremoso',
            'preco' => 25.00,
        ]);

        Produto::create([
            'nome' => 'Cupcake de Baunilha',
            'descricao' => 'Cupcake leve com cobertura de chantilly',
            'preco' => 12.00,
        ]);

        Produto::create([
            'nome' => 'Torta de Morango',
            'descricao' => 'Torta fresca com creme e morangos naturais',
            'preco' => 30.00,
        ]);

        Produto::create([
            'nome' => 'Brownie',
            'descricao' => 'Brownie denso e chocolatudo por dentro',
            'preco' => 15.00,
        ]);


    }
}
