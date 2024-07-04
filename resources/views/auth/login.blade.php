<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bordadeiras Do Brasil - Login (ADM)</title>

    <link rel="icon" href="favicon.png">

    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
<div class="login-container">
    <h2>Painel de Controle</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group">
            <label for="name">Email</label>
            <input value="{{old('email')}}" type="email" id="email" name="email" required autocomplete="">
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>
        <div class="input-group">
            <label for="password">Senha</label>
            <input type="password" autocomplete="current-password" id="password" name="password" required>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>
        <button type="submit">Entrar</button>
    </form>
</div>
</body>
</html>
