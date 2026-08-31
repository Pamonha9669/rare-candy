<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(Request $request){
        $usuarios = Usuario::when($request->filled('termo'), function ($query) use ($request) {
            $query->where('nome', 'like', '%' . $request->termo . '%');})->get();
        return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:usuario,email',
            'senha' => 'required|min:6',
        ]);

        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        return redirect()->route('usuarios')->with('sucesso', 'Usuário cadastrado com sucesso!');
    }

    public function edit($id){
        $usuario = Usuario::find($id);
        return view('usuarios_edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'senha' => 'nullable|min:6',
        ]);

        $usuario = Usuario::find($id);
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        if ($request->filled('senha')) {
            $usuario->senha = Hash::make($request->senha);
        }
        $usuario->save();

        return redirect()->route('usuarios')->with('sucesso', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id){
        Usuario::find($id)->delete();
        return redirect()->route('usuarios')->with('sucesso', 'Usuário excluído com sucesso!');
    }
}