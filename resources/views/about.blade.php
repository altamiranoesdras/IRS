@extends('layouts.app')

@section('contenido')
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
        Acerca de
        {{--<small>Subheading</small>--}}
      </h1>

      @component('layouts.partials.breadcrumb')
        Acerca de
      @endcomponent

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="{{asset('img/2.jpeg')}}" alt="">
        </div>
        <div class="col-lg-6">
          <h2>Yulson Hornet</h2>
          <p>
            Empresa dedicada al estudio y difusión del uso de las redes sociales y su influencia en el rendimiento académico en alumnos de nivel medio en el municipio de Sansare
          </p>
        </div>
      </div>
      <!-- /.row -->


      <!-- Our Customers -->
      <h2>Nuestros Socios</h2>
      <div class="row">
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="{{asset('img/steve.jpg')}}" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="{{asset('img/mark.jpg')}}" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="{{asset('img/esdras.jpg')}}" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="{{asset('img/solux.png')}}" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="{{asset('img/wosk.jpg')}}" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="{{asset('img/wosk.jpg')}}" alt="">
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection