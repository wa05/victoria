@extends('backpack::layout')

@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.album') }}
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
                  <div class="row">
                    <div class="col-md-4">
                      <a href="{{ route('album.create') }}" class="albumcreate"><i class="fa fa-book" aria-hidden="true"></i><br>Crear Nuevo Album</a>
                    </div>
                    <div class="col-md-8">
                    @if (Session::has('success'))
                           <div class="alert alert-success top20" role="alert">
                              <strong>Perfecto!</strong> {{ Session::get('success') }}
                            </div>

                    @endif
                    @if (count($errors) > 0)
                            <div class="alert alert-danger" role="alert">
                              <strong>Errores:</strong>
                              <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach  
                              </ul>
                            </div>
                    @endif
                    </div>

                    <div class="clearfix"></div>
                  </div>
                    
                </div>

                <div class="box-body">
                  <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="row fixing">
              @if($albums->count() > 0 )
                @foreach ($albums as $album)
                    <div class="col-xs-12 albumdesc">
                      <div class="row">
                        <div class="col-md-2">
                          <img src="{{ asset('images/' . $album->cover_image )}}" class="albmimg">
                        </div>
                        <div class="col-md-6">
                          <h3>{{ $album->name }}<br>
                            <small>{{$album->description}}</small></h3>
                        </div>
                        <div class="col-md-2">
                              <h2 class="top20">{{ $album->photos->count() }}<small>fotos</small></h2>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('album.show', $album->id) }}" class="btn btn-primary pull-right btn-spacing btn-block">Ver</a>
                        </div>
                      </div>

                    </div>
                @endforeach
                <div class="clearfix"></div>
                    <div class="text-center">
                    {!! $albums->links(); !!}
                  </div>
              @else
                
                  <div class="alert alert-danger centeralert">
                    <h4></h4>
                    <p>No se han encontrado Albums</p>
                  </div>
                
              @endif
              </div>
             
          </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
@endsection