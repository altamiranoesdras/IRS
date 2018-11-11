<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

    <!-- Css para cada modulo o pagina -->
    @stack('css')

</head>

<body>

@include('layouts.partials.navegacion')

@yield('contenido')

<!-- Footer -->
<footer class="py-3 bg-success">
    <div class="container">
        <p class="m-0 text-center text-white">Yulson Hornet Inc. Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!--            Scripts anexados en cada modulo
------------------------------------------------------------------------>

@stack('js')

</body>

</html>
