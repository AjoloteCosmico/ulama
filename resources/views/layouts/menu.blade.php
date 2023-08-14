<!-- need to remove -->

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2019') }}" class="nav-link {{ Request::is('2019') ? 'active' : '' }}">
    <i class="fa fa-plus" aria-hidden="true"></i>
        <p> Registrar rotacion </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('2014_act') }}" class="nav-link {{ Request::is('2014_act') ? 'active' : '' }}">
        <i class="fa fa-cash "></i>
        <p>Tesoreria</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('muestras.index') }}" class="nav-link {{ Request::is('muestras') ? 'active' : '' }}">
    <i class="nav-icon fas fa-table"></i>
        <p>Agenda</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('aviso') }}" class="nav-link {{ Request::is('aviso') ? 'active' : '' }}">
    <i class="nav-icon fas fa-paper-plane"></i>
        <p>Entrenamientos </p>
    </a>
</li>
