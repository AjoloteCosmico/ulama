<!-- need to remove -->

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('rotaciones.index') }}" class="nav-link {{ Request::is('rotaciones.index') ? 'active' : '' }}">
    <i class="fa fa-exchange" aria-hidden="true"></i>
        <p> Rotaciones </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('pelotas.index') }}" class="nav-link {{ Request::is('pelotas.index') ? 'active' : '' }}">
    <i class="fa fa-circle" aria-hidden="true"></i>
        <p> Pelotas </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('2014_act') ? 'active' : '' }}">
        <i class="fas fa-users "></i>
        <p>Jugadores</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('muestras') ? 'active' : '' }}">
    <i class="nav-icon fas fa-table"></i>
        <p>Agenda</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('aviso') ? 'active' : '' }}">
    <i class="nav-icon fas fa-paper-plane"></i>
        <p>Entrenamientos </p>
    </a>
</li>
