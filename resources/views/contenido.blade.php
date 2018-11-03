@extends('layouts.app')

@section('contenido')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            {{$contenido->titulo}}
            {{--<small>Subheading</small>--}}
        </h1>

        @component('layouts.partials.breadcrumb')
            Contenido
        @endcomponent

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="{{asset('storage/contenidos/'.$contenido->imagen)}}" alt="">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">Description</h3>
                <p>
                    {{$contenido->cuerpo}}
                </p>
                {{--<h3 class="my-3">Project Details</h3>--}}
                {{--<ul>--}}
                    {{--<li>Lorem Ipsum</li>--}}
                    {{--<li>Dolor Sit Amet</li>--}}
                    {{--<li>Consectetur</li>--}}
                    {{--<li>Adipiscing Elit</li>--}}
                {{--</ul>--}}
            </div>

        </div>
        <!-- /.row -->

        <br>
        <br>
        <!-- Related Projects Row -->
        <h3 class="my-4">Contenido Relacionado</h3>

        <div class="row">

            @foreach(\App\Contenido::all()->random(4) as $cont)
            <div class="col-md-3 col-sm-6 mb-4">
                <a href="{{route('contenido.show',$cont->id)}}">
                    <img class="img-fluid" src="{{asset('storage/contenidos/'.$cont->imagen)}}" alt="">
                </a>
            </div>
            @endforeach

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    @endsection