<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::create([
            'nome' => 'Pedro',
            'email' => 'pedro@gmail.com',
            'senha' => Hash::make('Pedro'),
        ]);

        Usuario::create([
            'nome' => 'Adm',
            'email' => 'adm@gmail.com',
            'senha' => Hash::make('Adm'),
        ]);
    }
}
