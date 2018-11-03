
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">Acerca de</a>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="services.html">Services</a>--}}
                {{--</li>--}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('contenidos')}}">Contenidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
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
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--Other Pages--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">--}}
                        {{--<a class="dropdown-item" href="full-width.html">Full Width Page</a>--}}
                        {{--<a class="dropdown-item" href="sidebar.html">Sidebar Page</a>--}}
                        {{--<a class="dropdown-item" href="faq.html">FAQ</a>--}}
                        {{--<a class="dropdown-item" href="404.html">404</a>--}}
                        {{--<a class="dropdown-item" href="pricing.html">Pricing Table</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
</nav>