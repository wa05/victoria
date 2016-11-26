@extends('secciones.main')
@section('metas')
@endsection

@section('contentblog')
<div class="col-md-9">
    <h1 class="text-center">{{ $album->name }} <br><small>{{ $album->description }}</small></h1>
    <hr>
		<div class="row">
					@foreach($photos as $photo)
                    <div class="col-md-3">
                      <div class="imgcontainer">
                        <a href="{{ asset('images/'.$photo->image ) }}" data-toggle="lightbox" data-gallery="multiimages" data-title="{{$photo->album->name}}">
                          <img src="{{ asset('images/' . $photo->image )}}" class="img-responsive albumimg"/>
                        </a>
                        <hr>
                        
                      </div> 
                    </div>


          @endforeach
          <div class="clearfix"></div>
          <div class="text-center">
            {!! $photos->links(); !!}
          </div>
          <div class="clearfix"></div>
          <ul class="breadcrumb">
          <li><a href="../">Inicio</a></li>
           <li><a href="/fotos">Fotos</a></li>
           <li class="active">{{ $album->name }}</li> 
        </ul> 
    	   
    </div>
  </div>
@endsection



@section('scriptsdos')
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js') }}"></script>
     <script >
      $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
      });
     </script>
@endsection