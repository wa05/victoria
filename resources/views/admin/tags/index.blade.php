@extends('backpack::layout')


@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Tags
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
                              
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-8">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($tags as $tag)
                          <tr>
                            <th>{{$tag->id}}</th>
                            <td><a href="{{ route('tags.show', $tag->id) }}"> {{$tag->name}}</a></td>
                            <td>
                              {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}

                        {{ Form::button('<i class="fa fa-trash"></i>', array('class'=>'btn btn-default btn-xs', 'type'=>'submit')) }}

                      {!! Form::close() !!}
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <div class="well">
                        {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
          <p>Nuevo Tag</p>
          {{ Form::label('name', 'Nombre:') }}
          {{ Form::text('name', null, ['class' => 'form-control']) }}

          {{ Form::submit('Crear Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
        
        {!! Form::close() !!}


                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection