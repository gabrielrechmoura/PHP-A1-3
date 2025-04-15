<x-layout>

    <h1 class="my-5">
        Criar usuário
    </h1>

    <!-- Formulário de edição -->
    <form action="/users/store" method="POST" class="inline">
        @csrf

        <!-- Campos -->
        <div class="my-5">
            <div class="sm:col-span-4">
                <label for="name">Nome</label>
                <div class="mt-2">
                    <input type="text" name="name" >
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="email">E-mail</label>
                <div class="mt-2">
                    <input type="text" name="email" >
                </div>
            </div>
        </div>

        <!-- Botões lado a lado -->
        <div class="mt-6">
            <button type="submit" class="btn btn-success">
                Salvar
            </button>
    </form>

    <a href="/users" class="btn">
        Voltar
    </a>
    </div>

</x-layout>