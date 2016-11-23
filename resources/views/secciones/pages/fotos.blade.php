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
        <h1 class="heading">Fotos de Victoria</h1>
            
          <div class="row">
            <div class="col-md-4 album">
              <div class="card card1">
                <h2>Voces a la obra, de Juan Falú</h2>
                <img src="{{ asset('images/DSC_0603.jpg')}}" class="img-responsive cardimg">
                <p class="small">La nueva generación celebra sus canciones...</p> 
                <a href="/fotos/vocesalaobra">
                <button class="btn link" type="button">Ver mas</button>        
                </a>
              </div>
            </div>

            <div class="col-md-4 album">
              <div class="card card2">
                <h2>Centro Cultural El Espiral</h2>
                <img src="{{ asset('images/8.jpg')}}" class="img-responsive cardimg">
                <p class="small">Adelanto del disco...</p>
                <a href="/fotos/elespiral">
                <button  class="btn link" type="button">Ver mas</button>
                </a>
              </div>
            </div>

            <div class="col-md-4 album">
              <div class="card card3">
                <h2>Ciclo de Musica Popular</h2>     
                <img src="{{ asset('images/9x.jpg')}}" class="img-responsive cardimg">
                <p class="small">Adelanto del disco junto a Franco Luciani... </p> 
                <a href="/fotos/ciclomusicapopular">
                <button class="btn link" type="button">Ver mas</button>        
                </a>
              </div>
            </div>
          </div>
         <ul class="breadcrumb">
          <li><a href="../">Inicio</a></li>
           <li class="active">Fotos</li> 
        </ul>

	</div>

@endsection

@section('scriptsdos')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
@endsection