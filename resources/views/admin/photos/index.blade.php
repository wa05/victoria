@extends('backpack::layout')

@section('before_styles')
  <link rel="stylesheet" href="{{ URL::asset('styles/admin.css') }}">
  
@endsection

@section('header')
    <section class="content-header">
      <h1>
        Fotos
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">Fotos</li>
      </ol>
    </section>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="box box-default">
                <div class="box-header with-border">
                  <div class="row">
     
                  </div>
               
                </div>

                <div class="box-body">
                  <div class="row">
                    
                  </div>
                  <div class="clearfix"></div>
                  <div class="row fixing albumrow">
                  @if($photos->count() > 0 )
                
                    
                    @foreach($photos as $photo)
                    <div class="col-md-2">
                      <div class="imgcontainer">
                        <div class="trash">
                          {!! Form::open(['route' => ['fotos.destroy', $photo->id], 'method' => 'DELETE']) !!}
                                    {{ Form::button('Borrar', array('class'=>'btn btn-xs btn-danger', 'type'=>'submit')) }}
                            {!! Form::close() !!} 
                        </div>
                        <img src="{{ asset('images/' . $photo->image )}}" class="img-responsive albumimg"/>
                        <hr>
                        
                      </div> 
                    </div>


                    @endforeach
                    <div class="clearfix"></div>
                    <div class="text-center">
                    {!! $photos->links(); !!}
                  </div>
                  @else
                
                  <div class="alert alert-danger centeralert">
                    <h4></h4>
                    <p>No se han encontrado fotos</p>
                  </div>
                
              @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after_scripts')
<script type="text/javascript">
/*
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
*/
    $('.imgcontainer').hover(
      function(){
        $(this).find('.trash').fadeIn('fast');
     },
     function(){
        $(this).find('.trash').fadeOut('slow');
     }
     );
  </script>

@endsection