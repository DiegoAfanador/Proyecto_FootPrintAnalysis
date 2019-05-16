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

                        <li>
                             <a>{{ Auth::user()->name }}</a>
                        </li>

                        @can('users.index')
                        <li >
                            <a class="nav-link" style="color: black;" href="{{ route('users.index')}}">Usuarios</a>
                        </li>
                        @endcan
                        @can('roles.index')
                        <li>
                            <a class="nav-link" style="color: black;" href="{{ route('roles.index')}}">Roles</a>
                        </li>
                        @endcan
                        @can('formatos.index')
                        <li>
                            <a class="nav-link" style="color: black;" href="{{ route('formatos.index')}}">Formato de salud</a>
                        </li>
                        @endcan
                        @can('nutricions.index')
                        <li>
                            <a class="nav-link" style="color: black;" href="{{ route('nutricions.index')}}">Nutrición</a>
                        </li>
                        @endcan
                        @can('analisis.index')
                        <li>
                            <a class="nav-link" style="color: black;" href="{{ route('analisis.index')}}">Analisis</a>
                        </li>
                        @endcan
                        @can('tabulacions.index')
                        <li>
                            <a class="nav-link" style="color: black;" href="{{ route('tabulacions.index')}}">Tabulación</a>
                        </li>
                        @endcan
                        @can('problematicas.index')
                        <li>
                            <a class="nav-link" style="color: black;" href="{{ route('problematicas.index')}}">Problematica</a>
                        </li>
                        @endcan
                        @can('recomendacions.index')
                        <li>
                            <a class="nav-link" style="color: black;" href="{{ route('recomendacions.index')}}">Recomendación</a>
                        </li>
                        @endcan
                        @can('evaluacions.index')
                        <li>
                            <a class="nav-link" style="color: black;" href="{{ route('evaluacions.index')}}">Evaluación funcional</a>
                        </li>
                        @endcan

                        
                                    <li href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><a class="nav-link">
                                        {{ __('Cerrar sesion') }}</a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

        </ul>
    </div>
    
</header>