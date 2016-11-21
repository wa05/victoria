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
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
              <div class="row">
                <div class="col-md-8">
                  <div class="container-center">
                    <div class="text-center">
                      <h3 class="text-center"> <b>{{ $noticia->title }}</b></h3>
                      <small>{{ $noticia->subtitle}}</small>
                    <hr>
                    <br>
                    <img class="postimg" src="{{ asset('images/' . $noticia->image )}}" />
                    </div>
                    <div class="contnot">
                      <p>{!! $noticia->body !!}</p> 
                    </div>
                  </div>
                </div>
                <div class="col-md-4 rightrow">
                  <div class="well">
                        <div class="row ">
                         
                          <div class="clearfix"></div>
                          <div class="col-xs-12">
                            <p> <b>URL :</b> <br> www.rioweb.com.ar/{{$noticia->slug}}</p><br>
                          </div>
                          <div class="col-xs-12 ">
                            <b>Categoría : </b> {{$noticia->category->name}}
                          </div> 
                          <div class="col-xs-12 ">
                            <br>
                            <b>Tags : </b> <br>
                              <div class="btn-h1-spacing">
                                @foreach ($noticia->tags as $tag)
                                  <span class="label label-default">{{ $tag->name }}</span>
                                @endforeach
                              </div>
                          </div> 
                      
                      </div>

                      <div class="row btn-spacing">
                        <div class="col-sm-6">
                          {!! HTML::linkRoute('blog.edit','Editar', array($noticia->id), array('class'=>'btn btn-primary btn-block')) !!}
                        </div>

                        <div class="col-sm-6">
                          <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Eliminar</button>
                        </div>
                         <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Confirmar</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Desea eliminar este post?</p>
                                </div>
                                <div class="modal-footer">
                                  <div class="row">
                                    <div class="col-xs-6">
                                      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    <div class="col-xs-6">
                                      {!! Form::open(['route' => ['blog.destroy', $noticia->id], 'method' => 'DELETE']) !!}
                                    {{ Form::button('Eliminar', array('class'=>'btn btn-danger btn-block', 'type'=>'submit')) }}
                                  {!! Form::close() !!}

                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>

                        <div class="clearfix"></div>
                        <div class="col-xs-12 btn-spacing">
                            {!! HTML::linkRoute('blog.index','Todos los posts',array($noticia->id), array('class'=>'btn btn-primary btn-block')) !!}
                        </div>
                      </div>
                  </div>
                </div>
                </div>
              </div>
              </div>
            </div>
        
@endsection

@section('after_scripts')
  {{ HTML::script('bower_components/parsley.min.js') }}
@endsection