@extends('layouts.app')

@push('css')
<style>
    .carousel-caption > p{
        color: red;
        font-weight: bold;
    }

    .carousel-caption > h3{
        color: black;
        font-weight: bold;

    }
</style>
@endpush
@section('contenido')
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{{asset('img/1.jpeg')}}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Adicciones</h3>
                        <p>Alerta para los padres de familia.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{asset('img/2.jpeg')}}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Dependencia</h3>
                        <p>Hemos creado un mundo dependiente de las redes sociales.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{asset('img/18.jpg')}}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Aislamiento</h3>
                        <p>Se ha perdido la interacción personal.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">INFLUENCIA DE LAS REDES SOCIALES</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            @foreach(\App\Contenido::limit(3)->get() as $cont)
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">{{$cont->titulo}}</h4>
                    <div class="card-body">
                        <p class="card-text">{{$cont->extracto}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('contenido.show',$cont->id)}}" class="btn btn-primary">Leer mas</a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Posts</h2>

        <div class="row">
            @foreach(\App\Post::limit(3)->get() as $post)
                <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="{{route('post.show',$post->id)}}"><img class="card-img-top" src="{{asset('storage/posts/'.$post->imagen)}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('post.show',$post->id)}}">{{$post->titulo}}</a>
                        </h4>
                        <p class="card-text">
                            {{$post->extracto}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Modern Business Features</h2>
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li>
                        <strong>Bootstrap v4</strong>
                    </li>
                    <li>jQuery</li>
                    <li>Font Awesome</li>
                    <li>Working contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="{{asset('img/9.jpeg')}}" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection