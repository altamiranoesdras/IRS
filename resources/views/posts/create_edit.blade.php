@extends('layouts.app')

@include('layouts.plugins.bootstrap_fileinput')

@section('contenido')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
        Nuevo Post
        {{--<small>Subheading</small>--}}
    </h1>

    @component('layouts.partials.breadcrumb')
        Post
    @endcomponent

    <!-- Form -->
    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">

            <div class="col-sm-4">

                <div class="form-group col-sm-12">
                    {!! Form::label('img', 'Imagen:') !!}
                    <input id="input-id" type="file" name="file" class="file" data-preview-file-type="text" >
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group col-sm-12">
                    {!! Form::label('titulo', 'Titulo:') !!}
                    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::label('cuerpo', 'Descripción:') !!}
                    {!! Form::textarea('cuerpo', null, ['id' => 'editor','rows' => 20,'class' => 'form-control editor-texto']) !!}
                </div>
            </div>

        </div>

        <div class="form-row">
            <div class="col-sm-12">
                <div class="form-group col-sm-12">
                    <br>
                    <button type="submit" class="btn btn-outline-success">
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </form>
    <!-- /.For -->

    <br>
    <br>


</div>
<!-- /.container -->
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
    <script type="text/javascript">
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                removePlugins: [ 'Heading', 'Link' ],
                toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ]
            } )
            .catch( error => {
                console.log( error );
            } );
    </script>
@endpush