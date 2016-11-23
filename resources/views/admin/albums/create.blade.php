@extends('backpack::layout')

@section('before_styles')

{!! HTML::style('css/parsley.css') !!}
{!! HTML::style('styles/select2.min.css') !!}


  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Crear Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.album') }}</li>
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
                  
    {!! Form::open(array('route' => 'album.store', 'data-parsley-validate' => '', 'files' => true)) !!}

        {{ Form::label('name', 'Nombre Album *') }}
        {{ Form::text('name',null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'255', 'placeholder' => 'Nombre del Album')) }}

        {{ Form::label('description','Descripcion', ['class'=>'btn-h1-spacing'] ) }}
        {{ Form::text('description',null, array('class' => 'form-control','maxlength' =>'255', 'placeholder' => 'Descripcion')) }}
        

        {{ Form::label('cover_image','Imagen portada', ['class'=>'btn-h1-spacing'] ) }}
        {{ Form::file('cover_image') }}

        {{ Form::submit('Crear Album', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;') ) }}
    {!! Form::close() !!}

                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
  {!! HTML::script('bower_components/parsley.min.js') !!}

@endsection