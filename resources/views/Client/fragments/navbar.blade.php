<nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- Título alineado a la izquierda -->
        <a class="navbar-brand px-5 h1" href="{{ route('inicio') }}">ELECTRODOMÉSTICOS LOS
            INGS</a>

        <div class="navbar-nav d-flex w-100 justify-content-between">


            <a class="nav-link " href="{{ route('inicio') }}">INICIO</a>

            <a class="nav-link active" href="{{ route('products.index') }}">PRODUCTOS</a>

            <a class="nav-link active" href="{{ route('services.create') }}">SERVICIOS</a>

            <a class="nav-link active "  href="/#contacto">CONTACTO</a>


            {{-- cunado este el user logeado --}}
            @if (auth()->user() != null)
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Cerrar sesion
                    </a>
                </form>
            @else
                {{-- cuando no  --}}

                <div class="d-flex gap-2">
                    <a class="nav-link active " aria-current="page" href="{{ route('register') }}">Registrar</a>

                    <a class="nav-link active " aria-current="page" href="{{ route('login') }}">Login</a>
                </div>
            @endif
        </div>


    </div>

</nav>
<hr style="height: 2px; background-color: black; ">
<br>
