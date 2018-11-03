@extends('layouts.app')

@section('contenido')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            {{$contenido->titulo}}
            {{--<small>Subheading</small>--}}
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Item</li>
        </ol>

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
        {{--<h3 class="my-4">Related Projects</h3>--}}

        {{--<div class="row">--}}

            {{--<div class="col-md-3 col-sm-6 mb-4">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-fluid" src="http://placehold.it/500x300" alt="">--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-md-3 col-sm-6 mb-4">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-fluid" src="http://placehold.it/500x300" alt="">--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-md-3 col-sm-6 mb-4">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-fluid" src="http://placehold.it/500x300" alt="">--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-md-3 col-sm-6 mb-4">--}}
                {{--<a href="#">--}}
                    {{--<img class="img-fluid" src="http://placehold.it/500x300" alt="">--}}
                {{--</a>--}}
            {{--</div>--}}

        {{--</div>--}}
        <!-- /.row -->

    </div>
    <!-- /.container -->
    @endsection