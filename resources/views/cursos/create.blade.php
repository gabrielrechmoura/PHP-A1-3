@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Novo Curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Curso</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="carga_horaria" class="form-label">Carga Horária (horas)</label>
            <input type="number" name="carga_horaria" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
