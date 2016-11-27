  @extends('backpack::layout')

@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>Detalles Album</h1>
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
                    <div class="col-md-6">
                        <h3><b>{{ $album->name }}</b><br>
                            <small>{{$album->description}}</small></h3>
                    </div>
                    <div class="col-md-3">
                       {!! HTML::linkRoute('album.edit','Editar', array($album->id), array('class'=>'btn btn-primary btn-block top20')) !!}
                        
                    </div>
                    <div class="col-md-3">
                        {!! Form::open(['route' => ['album.destroy', $album->id], 'method' => 'DELETE']) !!}
                                    {{ Form::button('Borrar Album', array('class'=>'btn btn-block btn-danger top20', 'type'=>'submit')) }}
                            {!! Form::close() !!}

                    </div>
                  </div>
               
                </div>

                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12">
                      
                      <div class="well">
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">Agregar Fotos al Album:</a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <form action="upload" id="upload" enctype="multipart/form-data">
                                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                  
                                  <input type="hidden" name="_albumid" value="{{ $album->id }}">
                                                         
                                  <input type="file" name="file[]" multiple> <br />

                                  <input type="submit">

                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row fixing albumrow">

                    @foreach($album->photos as $photo)
                    <div class="col-md-3">
                      <div class="imgcontainer">
                        
                        <img src="{{ asset('images/' . $photo->image )}}" class="img-responsive albumimg"/>
                        <hr>
                        
                      </div> 
                    </div>


                    @endforeach

                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
<script type="text/javascript">
    var form = document.getElementById('upload');
    var request = new XMLHttpRequest();

    form.addEventListener('submit', function(e){
      e.preventDefault();
      var formdata = new FormData(form);

      request.open('post', '/photoupload');

      
      request.addEventListener("load", transferComplete);
      
      request.send(formdata);
    });
    
    function transferComplete(data){
        location.reload();
    }

    
  </script>

@endsection