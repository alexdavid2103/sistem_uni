<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <h2 class="logo"><a href="#">Sistem_Uni</a></h2>
        <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </label>
        <ul class="links">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Sobre Mi</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
        <div class="buttons">
          <a href="{{ route('login') }}" class="signin">Ingresar</a>
          <a href="{{ route('register') }}"class="signup">Registrate</a>
        </div>
      </nav>
    </header>
    <section class="hero-section">
      <div class="hero">
        <h2>Sistema de Calificaciones.</h2>
        <p>
          "¡Bienvenido a nuestra plataforma de calificaciones líder en educación! En nuestro compromiso por empoderar la educación, hemos creado una solución completa para profesores, estudiantes y padres que revolucionará la forma en que gestionas y sigues el progreso académico.
        </p>
        <div class="buttons">
          <a href="{{ route('login') }}" class="join">Ingresar al Sistema</a>
          <a href="#" class="learn">Learn More</a>
        </div>
      </div>
      <div class="img">
        <img src="assets/img/lista_edit.png" alt="hero image" />
      </div>
    </section>
  </body>
</html>