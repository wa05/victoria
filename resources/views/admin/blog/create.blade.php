@extends('backpack::layout')

@section('before_styles')

{!! HTML::style('css/parsley.css') !!}
{!! HTML::style('styles/select2.min.css') !!}


  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  
  <script type="text/javascript">
    tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
    menubar: false,
    plugins: 'link code',
    statusbar: false,
    language_url : '/js/es.js'
  }); 

  </script>
  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Crear Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="box box-default">
                <div class="box-header with-border">
                @if ($errors->any())
                   @foreach ($errors->all() as $error)
                      <div>{{ $error }}</div>
                  @endforeach
                @endif
                </div>
                <div class="box-body">
                  
    {!! Form::open(array('route' => 'blog.store', 'data-parsley-validate' => '', 'files' => true)) !!}

        {{ Form::label('title', 'Titulo Post *') }}
        {{ Form::text('title',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Insertar Titulo post')) }}

        <div class="row">
          <div class="col-md-6">
        {{ Form::label('subtitulo','Subtitulo', ['class'=>'btn-h1-spacing'] ) }}
        {{ Form::text('subtitle',null, array('class' => 'form-control','maxlength' =>'255', 'placeholder' => 'Subtitulo opcional')) }}
          </div>
          <div class="col-md-6">
        {{ Form::label('slug','Slug *', ['class'=>'btn-h1-spacing'] ) }}
        {{ Form::text('slug',null, array('class' => 'form-control', 'required' => '', 'minlength' => '5','maxlength' =>'255','placeholder' => 'Url sin espacios solo guiones')) }}
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
                {{ Form::label('category_id','Categoría *', ['class'=>'btn-h1-spacing']) }}
                <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
          </div>
          <div class="col-md-6">
                {{ Form::label('tags','Tags *', ['class'=>'btn-h1-spacing']) }}
                <select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
                </select>

          </div>
        </div>

        {{ Form::label('featured_image','Cargar imagen', ['class'=>'btn-h1-spacing'] ) }}
        {{ Form::file('featured_image') }}


        {{ Form::label('body','Cuerpo noticia *',['class'=>'btn-h1-spacing'] ) }}
        {{ Form::textarea('body',null, array('class' => 'form-control')) }}

        {{ Form::submit('Subir Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;') ) }}
    {!! Form::close() !!}

                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
  {!! HTML::script('bower_components/parsley.min.js') !!}
  {!! HTML::script('bower_components/es.js') !!}
  {!! HTML::script('bower_components/select2.min.js') !!}

  <script type="text/javascript">
     $('.js-example-basic-multiple').select2();


  </script>

@endsection