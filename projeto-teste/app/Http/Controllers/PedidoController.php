<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::orderBy('data', 'desc')->paginate(10);
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'data' => 'required|date',
            'quantidade_itens' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0'
        ]);

        Pedido::create($validated);

        return redirect()->route('pedidos.index')
                         ->with('success', 'Pedido criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $validated = $request->validate([
            'data' => 'required|date',
            'quantidade_itens' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0'
        ]);

        $pedido->update($validated);

        return redirect()->route('pedidos.index')
                         ->with('success', 'Pedido atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index')
                         ->with('success', 'Pedido excluído com sucesso!');
    }
}