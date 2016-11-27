@extends('secciones.main')

<?php $titleTag = htmlspecialchars($post->title); ?>

@section('title', "| $titleTag")
@section('metasdos')
    <meta name="description" content="{{$post->title - $post->subtitle }}" />

    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:url" content="http:://www.vitoriabirchner.com.ar/blog/{{ $post->slug }}" />
    <meta property="og:image" content="http://www.victoriabirchner.com.ar/images/{{ $post->image }}" />
    <meta property="og:description" content="{{ $post->subtitle }}" />
    
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Victoria Birchner" />
    <meta name="twitter:creator" content="@Victoria Birchner" />
    <meta name="twitter:title" content="{{ $post->title}}" />
    <meta name="twitter:description" content="{{ $post->subtitle}}" />
    <meta name="twitter:image" content="http://www.victoriabirchner.com.ar/images/{{$post->image}}" />

    <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

@endsection

@section('contentblog')

<div class="col-md-9">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
    			<div class="relative">
          <div class="fb-share-button" style="position:absolute;right:0;"
            data-href="http://www.victoriabirchner.com.ar/blog/{{$post->slug}}" 
            data-layout="button_count">
          </div>
          </div>
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