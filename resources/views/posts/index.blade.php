@extends('layouts.app')

@section('contenido')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Posts
            {{--<small>Subheading</small>--}}
        </h1>

        @component('layouts.partials.breadcrumb')
            Posts
        @endcomponent


        @forelse ($posts as $post)
        <!-- Blog Post -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{route('post.show',$post->id)}}">
                                <img class="img-fluid rounded" src="{{$post->img}}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="card-title">{{$post->titulo}}</h2>
                            <p class="card-text">
                                {{$post->extracto}}
                            </p>
                            <a href="{{route('post.show',$post->id)}}" class="btn btn-primary">
                                Leer mas
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{$post->created_al}}
                    {{--<a href="#">Start Bootstrap</a>--}}
                </div>
            </div>
        @empty
            <div class="card" style="margin-bottom: 17rem">
                <div class="card-body">
                    <h1 class="text-danger text-center text-uppercase">
                        No hay ningun post
                    </h1>
                </div>
            </div>
        @endforelse

        <div class="pagination justify-content-center">
            <!-- Pagination -->
            {{$posts->links()}}
        </div>


    </div>
    <!-- /.container -->
@endsection