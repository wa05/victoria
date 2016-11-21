@extends('backpack::layout')

@section('before_styles') 
  <link rel="stylesheet" href="{{ URL::asset('css/parsley.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('styles/select2.min.css') }}">
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
        selector: 'textarea',  // change this value according to your HTML
        menubar: false,
        plugins: 'link',    
        language_url : '/js/es.js'
    }); 
  </script>
  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Editar post
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
    {!! Form::model($noticia, ['route' => ['blog.update', $noticia->id], 'method' => 'PUT', 'files'=> true ]) !!}
    
        {{ Form::label('title', 'Titulo:')}}
        {{ Form::text('title', null, ['class'=> 'form-control input-lg'])}}

      <div class="row">
          <div class="col-md-6">  
        {{ Form::label('subtitle', 'SubTitulo:', ['class'=>'form-spacing-top'])}}
        {{ Form::text('subtitle', null, ['class'=> 'form-control input-lg'])}}
          </div>
          <div class="col-md-6">
        {{ Form::label('slug', 'Slug:', ['class'=>'form-spacing-top'])}}
        {{ Form::text('slug', null, ['class'=> 'form-control input-lg'])}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">    
        {{ Form::label('category_id','Categoría', ['class'=>'form-spacing-top']) }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
          </div>          
          <div class="col-md-6">    
        {{ Form::label('tags', 'Tags',['class'=>'form-spacing-top']) }}
        {{ Form::select('tags[]',$tags, null, ['class'=>'form-control js-example-basic-multiple', 'multiple'=>'multiple']) }}
          </div>
        </div>          

        {{ Form::label('featured_image', 'Actualizar imagen',['class'=>'form-spacing-top'])}}
        {{ Form::file('featured_image') }}

        {{ Form::label('body', 'Noticia:', ['class'=>'form-spacing-top'])}}
        {{ Form::textarea('body', null, ['class' =>'form-control'])}}

        <div class="well">
          <div class="row">
            <div class="col-sm-6">
                {!! HTML::linkRoute('blog.show','Cancelar', array($noticia->id), array('class'=>'btn btn-danger btn-block')) !!}
                
                </div>

                <div class="col-sm-6">
                  {{ Form::submit('Guardar',['class'=>'btn btn-success btn-block']) }}
                </div>

          </div>

        </div>

      </div>

      {!! Form::close() !!}
                        
           
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
  {{ HTML::script('bower_components/parsley.min.js') }}
  {{ HTML::script('bower_components/es.js') }}
  {{ HTML::script('bower_components/select2.min.js') }}

  <script type="text/javascript">
     $(".js-example-basic-multiple").select2();

     $(".js-example-basic-multiple").select2().val({!! json_encode($noticia->tags()->getRelatedIds()) !!}).trigger('change');



  </script>
@endsection
