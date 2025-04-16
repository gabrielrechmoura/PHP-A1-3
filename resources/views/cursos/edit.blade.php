@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Curso</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Curso</label>
            <input type="text" name="nome" class="form-control" value="{{ $curso->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control" rows="3">{{ $curso->descricao }}</textarea>
        </div>

        <div class="mb-3">
            <label for="carga_horaria" class="form-label">Carga Horária (horas)</label>
            <input type="number" name="carga_horaria" class="form-control" value="{{ $curso->carga_horaria }}">
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
