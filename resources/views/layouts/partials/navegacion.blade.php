
<!-- Navigation -->
<nav class="navbar  text-white navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <b>{{config('app.name')}}</b>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-left" id="navbarResponsive">
            <ul class="navbar-nav ml-auto font-weight-bold" style="color: white !important;">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">Acerca de</a>
                </li>
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('contenidos.index')}}">Contenidos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                    </li>
                @else
                    @if(Auth::user()->isAdmin())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contenidos
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="{{route('contenidos.index')}}">Todos</a>
                                <a class="dropdown-item" href="{{route('contenidos.create')}}">Nuevo</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('contenidos')}}">Contenidos</a>
                        </li>
                    @endif

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Post
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="{{route('posts.index')}}">Todos</a>
                                <a class="dropdown-item" href="{{route('posts.index').'?user='.Auth::user()->id}}">Mis Post</a>
                                <a class="dropdown-item" href="{{route('posts.create')}}">Nuevo</a>
                            </div>
                        </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contactanos</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Ingreso</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="#"class="nav-link" data-toggle="modal" data-target="#modalLogout">
                            <i class="fa fa-sign-out-alt"></i>
                            <span class="d-none d-sm-inline">Salir</span>
                        </a>
                    </li>
                @endguest
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--Blog--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">--}}
                        {{--<a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>--}}
                        {{--<a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>--}}
                        {{--<a class="dropdown-item" href="blog-post.html">Blog Post</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
            </ul>
        </div>

    </div>
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="modalLogoutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLogoutLabel">¿Listo para salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "{{__('Logout')}}" a continuación si está listo para finalizar su sesión actual.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary" >
                        {{__('Logout')}}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>