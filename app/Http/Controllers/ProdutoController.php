<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('codigo')->paginate(10);
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

public function store(Request $request)
{
    $request->validate([
        'codigo'        => 'required|integer|unique:produtos',
        'descricao'     => 'required|string|max:60',
        'codigo_barras' => 'nullable|string|max:14',
        'valor_venda'   => 'required',
        'peso_bruto'    => 'nullable',
        'peso_liquido'  => 'nullable',
    ]);

    // Converte vírgula para ponto antes de salvar
    $data = $request->all();
    $data['valor_venda']  = str_replace(',', '.', $request->valor_venda);
    $data['peso_bruto']   = $request->peso_bruto ? str_replace(',', '.', $request->peso_bruto) : null;
    $data['peso_liquido'] = $request->peso_liquido ? str_replace(',', '.', $request->peso_liquido) : null;

    Produto::create($data);

    return redirect()->route('produtos.index')
        ->with('success', 'Produto cadastrado com sucesso!');
}

    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
    $request->validate([
        'codigo'        => 'required|integer|unique:produtos,codigo,' . $produto->id,
        'descricao'     => 'required|string|max:60',
        'codigo_barras' => 'nullable|string|max:14',
        'valor_venda'   => 'required',
        'peso_bruto'    => 'nullable',
        'peso_liquido'  => 'nullable',
    ]);

    // Converte vírgula para ponto antes de salvar
    $data = $request->all();
    $data['valor_venda']  = str_replace(',', '.', $request->valor_venda);
    $data['peso_bruto']   = $request->peso_bruto ? str_replace(',', '.', $request->peso_bruto) : null;
    $data['peso_liquido'] = $request->peso_liquido ? str_replace(',', '.', $request->peso_liquido) : null;

    $produto->update($data);

    return redirect()->route('produtos.index')
        ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}