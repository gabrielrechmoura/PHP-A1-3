@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Pedidos</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Qtd. Itens</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->data->format('d/m/Y') }}</td>
                <td>{{ $pedido->quantidade_itens }}</td>
                <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('pedidos.create') }}" class="btn btn-success">Novo Pedido</a>
</div>
@endsection