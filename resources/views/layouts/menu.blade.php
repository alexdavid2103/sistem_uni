<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inicio</p>
    </a>
    <a href="{{ route('usuarios.index') }}" class="nav-link {{ Request::is('usuarios') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>usuarios</p>
    </a>
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles') ? 'active' : '' }}">
        <i class="nav-icon fas fa-lock"></i>
        <p>Roles</p>
    </a>
    <a href="{{ route('estudiantes.index') }}" class="nav-link {{ Request::is('estudiantes') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Estudiantes</p>
    </a>
    <a href="{{ route('docentes.index') }}" class="nav-link {{ Request::is('docentes') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Docentes</p>
    </a>
    <a href="{{ route('cursos.index')}}" class="nav-link {{ Request::is('cursos') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Cursos</p>
    </a>
    <a href="{{ route('notas.index')}}" class="nav-link {{ Request::is('notas') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Notas</p>
    </a>
    <a href="{{ route('programas.index')}}" class="nav-link {{ Request::is('programas') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Programas</p>
    </a>
</li>
