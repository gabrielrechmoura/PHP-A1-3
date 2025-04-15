<x-layout>

    <h1 class="my-5">
        Detalhes do usuário
    </h1>

    <!-- Formulário de edição -->
    <form action="/user/{{ $user->id }}" method="POST" class="inline">
        @method('PUT')
        @csrf

        <!-- Campos -->
        <div class="my-5">
            <div class="sm:col-span-4">
                <label for="name">Nome</label>
                <div class="mt-2">
                    <input type="text" name="name" value="{{ $user->name }}">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="email">E-mail</label>
                <div class="mt-2">
                    <input type="text" name="email" value="{{ $user->email }}">
                </div>
            </div>
        </div>

        <!-- Botões lado a lado -->
        <div class="mt-6">
            <button type="submit" class="btn btn-success">
                Salvar
            </button>
    </form>

    <form action="/user/{{ $user->id }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')" class="inline">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">
            Excluir
        </button>
    </form>

    <a href="/users" class="btn">
        Voltar
    </a>
    </div>
    
</x-layout>
