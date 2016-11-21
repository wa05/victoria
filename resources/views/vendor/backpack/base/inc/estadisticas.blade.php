@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.estadisticas') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.estadisticas') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <h2 class="heading text-center">Objetivos etc...</h2>
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            
          </div>
        </div>
    </div>
@endsection
