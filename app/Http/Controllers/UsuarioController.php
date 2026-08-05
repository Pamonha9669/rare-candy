<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
         return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function store(Request $request){
        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        return redirect()->route('usuarios');
    }
    
    public function edit($id){
    $usuario = Usuario::find($id);
    return view('usuarios_edit', ['usuario' => $usuario]);
}

    public function update(Request $request, $id){
        $usuario = Usuario::find($id);
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        if ($request->filled('senha')) {
            $usuario->senha = Hash::make($request->senha);
        }
        $usuario->save();

    return redirect()->route('usuarios');
}
    public function destroy($id){
        Usuario::find($id)->delete();
        return redirect()->route('usuarios');
    }


}
