@extends('layouts.app')

@section('contenido')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contenidos
            {{--<small>Subheading</small>--}}
        </h1>

        @component('layouts.partials.breadcrumb')
            Contenidos
        @endcomponent

        <div class="row">
            @forelse($contenidos as $contenido)
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="{{route('contenido.show',$contenido->id)}}">
                            <img class="card-img-top" src="{{$contenido->img}}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{route('contenido.show',$contenido->id)}}">
                                    {{$contenido->titulo}}
                                </a>
                            </h4>
                            <p class="card-text">
                                {{$contenido->extracto}}
                            </p>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-sm-12">
                    <div class="card" style="margin-bottom: 17rem">
                        <div class="card-body">
                            <h1 class="text-danger text-center text-uppercase">
                                No hay ningun contenido
                            </h1>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="pagination justify-content-center">
            <!-- Pagination -->
            {{$contenidos->links()}}
        </div>


    </div>
    <!-- /.container -->
@endsection