<x-layout>

  <h1 class="my-5">Users</h1>

  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <a href="/user/{{ $user->id }}" class="btn btn-primary">
            detalhes
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="/users/create" class="btn btn-primary">
    Incluir usuário
  </a>

</x-layout>