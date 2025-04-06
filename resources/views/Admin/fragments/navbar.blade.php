
<nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <a class="navbar-brand px-5 h1" href="{{ route('admin') }}">Panel de administración</a>

            <div class="navbar-nav d-flex w-100 justify-content-between">
                <a class="nav-link active" href="{{ route('admin') }}">INICIO</a>
                @if (auth()->user() != null)

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="nav-link active" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Cerrar sesion
                    </a>
                </form>
                @endif

            </div>
    </div>
</nav>
<hr style="height: 2px; background-color: black; ">
<br>

