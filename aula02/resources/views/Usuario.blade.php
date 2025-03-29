<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <a href="{{ route('users.create') }}">Cadastrar Novo Usuário</a>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
</body>
</html>
