@extends('backpack::layout')

@section('before_styles')

{!! HTML::style('css/parsley.css') !!}
{!! HTML::style('styles/select2.min.css') !!}


  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  
  <script type="text/javascript">
    tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
    menubar: false,
    plugins: 'link',
    language_url : '/js/es.js'
  }); 

  </script>
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.blog') }}
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
                    <div class="box-title">Crear Post</div>
                </div>
                <div class="box-body">
    {!! Form::open(array('route' => 'blog.store', 'data-parsley-validate' => '')) !!}

        {{ Form::label('title', 'Titulo post') }}
        {{ Form::text('title',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255')) }}

        {{ Form::label('subtitulo','Subtitulo:' ) }}
        {{ Form::text('subtitle',null, array('class' => 'form-control','maxlength' =>'255')) }}

        {{ Form::label('slug','Slug:' ) }}
        {{ Form::text('slug',null, array('class' => 'form-control', 'required' => '', 'minlength' => '5','maxlength' =>'255')) }}

        {{ Form::label('category_id','Categoría') }}
        <select class="form-control" name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>

        {{ Form::label('tags','Tags') }}
        <select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
        @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach

        </select>

        {{ Form::label('body','Cuerpo noticia:' ) }}
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