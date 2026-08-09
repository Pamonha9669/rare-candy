<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos', ['produtos' => $produtos]);
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ]);

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
        ]);

        return redirect()->route('produtos')->with('sucesso', 'Produto cadastrado com sucesso!');
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('produtos_edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ]);

        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->save();

        return redirect()->route('produtos')->with('sucesso', 'Produto atualizado com sucesso!');
    }

    public function destroy($id){
        Produto::find($id)->delete();
        return redirect()->route('produtos')->with('sucesso', 'Produto excluído com sucesso!');
    }
}