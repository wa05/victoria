@extends('secciones.main')

@section('title', "| Fotos")

@section('metas')
  <meta name="description" content="Fotos de Victoria Birchner" />
@endsection

@section('stylesdos')
	<style type="text/css" href="{{ asset('styles/fotos.css') }}">
	
	</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css" />
@endsection

@section('contentblog')
    <div class="col-md-9">
        <h1 class="heading text-center">Fotos de Victoria <br> <small>Ultimos eventos</small> </h1>
            <hr>
            <br>
          <div class="row">
             @foreach($albums as $album)

            <div class="col-md-4 album">
              <div class="card card1">
                <a href="{{ route('fotos.singlefoto', $album->id) }}">
                  <img src="{{ asset('images/'.$album->cover_image) }}" class="img-responsive cardimg">
                </a>
                <h4 class="notititle"><b>{{$album->name}}</b><br>
                  <small>{{$album->description}}</small>
                </h4>

              </div>
            </div>
            @endforeach

            <div class="text-center">
              {!! $albums->links(); !!}
            </div>
          </div>
          <hr>
         <ul class="breadcrumb">
          <li><a href="../">Inicio</a></li>
           <li class="active">Fotos</li> 
        </ul>

	</div>

@endsection

@section('scriptsdos')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
@endsection