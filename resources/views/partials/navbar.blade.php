<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" >
                VideoClub

            </button>






            <div class="dropdown-menu" >
                <a href="{{url('/catalog')}}" class="dropdown-item">
                    Catálogo
                </a>
                <a href="{{url('/catalog/create')}}" class="dropdown-item">
                    Nueva película
                </a>
                <a href="{{url('logout')}}" class="dropdown-item">
                    Cerrar sesión (@if( Auth::check() ){{Auth::user()->name}})
                </a>

            </div>

            @endif
        </div>
    </div>
</nav>