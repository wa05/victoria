@extends('secciones.main')

<?php $titleTag = htmlspecialchars($post->title); ?>

@section('title', "| $titleTag")
@section('metas')
  <meta name="description" content="{{$post->subtitle}}" />
@endsection

@section('contentblog')
<div class="col-md-9">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
    			<h1 class="heading">{{ $post->title }}</h1>
          <small>{{ $post->subtitle}}</small>
          <hr>
          <img class="postimg img-responsive" src="{{ asset('images/' . $post->image )}}" />
          <div class="contnot">
                
                <hr>        
            		
          <p class="contenido">{!! $post->body !!}</p>
          </div>
      
          
    	</div>
    </div>
  </div>
@endsection



@section('scripts')

@endsection