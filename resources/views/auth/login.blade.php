<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="correo">Correo Electrónico</label>
        <input name="correo" type="email" required>
    
        <label for="password">Contraseña</label>
        <input name="password" type="password" required>
    
        <button type="submit">Iniciar sesión</button>
    </form>
    @if($errors->any()){
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    }
    
</body>
</html>
