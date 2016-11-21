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
                  <div class="row">
                    <div class="col-md-8">
                      <h1>{{ $tag->name }} Tag <small>{{ $tag->notices()->count() }} Posts </small></h1>               
                    </div>
                    <div class="col-md-2 col-md-offset-2">
                      <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary pull-right btn-spacing btn-block">Editar</a>
                    </div>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Titulo</th>
                              <th>Tags</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($tag->notices as $notice)
                            <tr>
                              <th>{{ $notice->id }}</th>
                              <th>{{ $notice->title }}</th>
                                <td>
                                  @foreach($notice->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                  @endforeach
                                </td>
                                <td><a href="{{ route('blog.show', $notice->id) }}" class="btn btn-default btn-xs">Ver</a> </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection