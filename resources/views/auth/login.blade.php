<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                <h1>EduCheck</h1>
                <p>"¡Bienvenido al sistema de Calificaciones!"  </p>
                <p> Accede a tu cuenta</p>
            </div>
            <form method="post" action="{{ url('/login') }}">
                @csrf

                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email or phone number"
                    class="form @error('email') is-invalid @enderror" required>
                @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
                <input type="password" name="password" placeholder="Password"
                    class="form @error('password') is-invalid @enderror" required>
                @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
                <div class="link">
                    <button type="submit" class="login">Login</button>
                    <a href="{{ route('password.request') }}" class="forgot">Olvidar Contraseña?</a>
                </div>
                <hr>
                <div class="button">
                    <a href="{{ route('register') }}">Crear Cuenta</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
