@extends('secciones.main')

@section('title', "| Blog")

@section('metas')
  <meta name="description" content="Blog noticias eventos de Victoria Birchner" />
@endsection

@section('styles')
	<style type="text/css">
	
	</style>
@endsection

@section('contentblog')
    <div class="col-md-9">
                <div class="row">

        <h1 class="heading text-center">Blog <br><small>Eventos, notas y novedades.</small>  </h1>
        		@foreach($posts as $post)
                    <div class="col-md-4  col-xs-12 col-sm-6">
                      <div class="noti">
                <a href="{{ route('blog.single', $post->slug) }}">
                <img src="{{ asset('images/' . $post->image )}}" class="img-responsive cardimg">
                </a>
                
                        <h4 class="text-center" style="font-weigth:bolder;"> <b> {{ substr(strip_tags($post->title), 0, 105)}} </b></h4>
                        
                      </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
    <div class="text-center">
        {!! $posts->links(); !!}
    </div>

            </div>
            <div class="clearfix"></div>
    <ul class="breadcrumb">
          <li><a href="../">Inicio</a></li>
           <li class="active">Blog</li> 
        </ul>  
	
	</div>

@endsection

@section('scripts')

@endsection