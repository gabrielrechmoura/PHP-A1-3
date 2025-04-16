<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4 px-3">
        <a class="navbar-brand" href="{{ route('alunos.index') }}">Alunos</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
