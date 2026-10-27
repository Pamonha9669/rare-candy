<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Resources\ProdutoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $produtos = Produto::when($request->filled('termo'), function ($query) use ($request) {
            $query->where('nome', 'like', '%' . $request->termo . '%');})->get();
        return view('produtos', ['produtos' => $produtos]);
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'imagem' => 'nullable|image|max:4096',
        ]);

        $dados = $request->only('nome', 'descricao', 'preco');

        if ($request->hasFile('imagem')) {
    $url = $this->enviarImagem($request->file('imagem'));
    if (!$url) {
        return back()->withInput()->withErrors(['imagem' => 'Não foi possível enviar a imagem.']);
    }
    $dados['imagem'] = $url;
    }

        Produto::create($dados);

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
            'imagem' => 'nullable|image|max:4096',
        ]);

        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        if ($request->hasFile('imagem')) {
    $url = $this->enviarImagem($request->file('imagem'));
    if (!$url) {
        return back()->withInput()->withErrors(['imagem' => 'Não foi possível enviar a imagem.']);
    }
    $produto->imagem = $url;
    }

        $produto->save();

        return redirect()->route('produtos')->with('sucesso', 'Produto atualizado com sucesso!');
    }

    public function destroy($id){
        Produto::find($id)->delete();
        return redirect()->route('produtos')->with('sucesso', 'Produto excluído com sucesso!');
    }

    private function enviarImagem($arquivo){
    $resposta = Http::attach('file', file_get_contents($arquivo->getRealPath()), $arquivo->getClientOriginalName())
        ->post('https://api.cloudinary.com/v1_1/' . config('services.cloudinary.cloud_name') . '/image/upload', [
            'upload_preset' => config('services.cloudinary.upload_preset'),
        ]);

    return $resposta->successful() ? $resposta->json('secure_url') : null;
    }

    public function apiIndex(Request $request){
        $produtos = Produto::when($request->filled('termo'), function ($query) use ($request) {
            $query->where('nome', 'like', '%' . $request->termo . '%');
        })->orderBy('nome')->get();

        return ProdutoResource::collection($produtos);
    }

    public function apiShow($id){
        return new ProdutoResource(Produto::findOrFail($id));
    }
}