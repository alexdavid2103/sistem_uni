<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                <h1>EduCheck</h1>
                <p>"¡Bienvenido al sistema de Calificaciones!"  </p>
                <p>Registrar Nueva Cuenta</p>
            </div>
            <form method="post" action="{{ url('register') }}">
                @csrf
                <div>
                <input type="text" name="name" 
                    class="form @error('name') is-invalid @enderror"  value="{{ old('name') }}" placeholder="Full Name" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                <div>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                    class="form @error('email') is-invalid @enderror" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div>
                <select name="role" class="form-control @error('role') is-invalid @enderror" placeholder="Selecione su Rol">
                    <option value="" disabled>Selecciona un rol</option>
                    <option value="user">Usuario</option>
                    <option value="admin">Administrador</option>
                    <option value="estudiante">Estudiante</option>
                    <option value="docente">Docente</option>
                    
                </select>
                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                 @enderror
                        </div>
                
                <div>
                <input type="password" name="password" placeholder="Password"
                    class="form @error('password') is-invalid @enderror" required>
                @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="password_confirmation" name="password" placeholder="confirm Password" required>
            </div>
                <div class="link">
                    <button type="submit" class="login">Register</button>
                </div>
                <hr>
                <div class="button">
                    <a href="{{ route('login') }}">¿Ya tienes Cuenta?</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
