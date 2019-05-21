<header>
    <div class="container-fluid">
        <div class="row shadow mb-5 ">
            <div class="col-4 "></div>
            <div class="col-4 align-self-center"><h3 class="text-center">FOOTPRINT ANALYSIS</h3></div>
        <div class="col-4"><img class="float-right" src="{{asset('img/HeaderSena2.png')}}"></div>
        </div>
    </div>

    <input type="checkbox" class="checkbox" id="check">
    <label class="menu" for="check"><i class="fas fa-bars" style="color:white;"></i></label>
    <div class="MenuDesplegable">
        <ul>

                        <label>
                             <a>{{ Auth::user()->name }}</a>
                        </label>

                        @can('users.index')
                            <a class="nav-link" style="color: black;" href="{{ route('users.index')}}">Usuarios</a>
                        @endcan

                        @can('roles.index')
                            <a class="nav-link" style="color: black;" href="{{ route('roles.index')}}">Roles</a>
                        @endcan

                        @can('formatos.index')
                            <a class="nav-link" style="color: black;" href="{{ route('formatos.index')}}">Formato de salud</a>
                        @endcan

                        @can('nutricions.index')
                            <a class="nav-link" style="color: black;" href="{{route('nutricions.index')}}">Nutrición</a>
                        @endcan

                        @can('analisis.index')
                            <a class="nav-link" style="color: black;" href="{{ route('analisis.index')}}">Análisis</a>
                        @endcan

                        @can('tabulacions.index')
                            <a class="nav-link" style="color: black;" href="{{ route('tabulacions.index')}}">Tabulación</a>
                        @endcan

                        @can('problematicas.index')
                            <a class="nav-link" style="color: black;" href="{{ route('problematicas.index')}}">Problemática</a>
                        @endcan

                        @can('recomendacions.index')
                            <a class="nav-link" style="color: black;" href="{{ route('recomendacions.index')}}">Recomendación</a>
                        @endcan

                        @can('evaluacions.index')
                            <a class="nav-link" style="color: black;" href="{{ route('evaluacions.index')}}">Evaluación funcional</a>
                        @endcan

                        
                                    <label href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><a class="nav-link">
                                        {{ __('Cerrar sesión') }}</a>
                                    </label>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

        </ul>
    </div>
    
</header>