<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Favorito;
use App\Models\Produto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FavoritoSeeder extends Seeder
{
    public function run(): void
    {
        $produto = Produto::first();
        if ($produto) {
            Favorito::create([
                'produto_id' => $produto->id,
            ]);
        }

    }
}
