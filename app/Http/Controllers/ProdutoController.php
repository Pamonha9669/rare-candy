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
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
        ]);

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
        ]);

        return redirect()->route('produtos');
    }

    public function edit($id){
         $produto = Produto::find($id);
        return view('produtos_edit', ['produto' => $produto]);
}

    public function update(Request $request, $id){
        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->save();
         return redirect()->route('produtos');
    }

    public function destroy($id){
        Produto::find($id)->delete();
        return redirect()->route('produtos');
    }


}
