@extends('backpack::layout')


@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.blog') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.blog') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="box box-default">
                <div class="box-header with-border">
                  <h1>Editar Tag</h1>
                </div>
                <div class="box-body">
                    {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) }}
                      {{ Form::label('name', "Titulo") }}
                      {{ Form::text('name', null, ['class' => 'form-control']) }}

                      {{ Form::submit('Guardar cambios', ['class' => 'btn btn-success btn-h1-spacing' ]) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection