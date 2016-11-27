@extends('welcome')

<!--@section('title', '| Blog')-->
@section('metas')
	
	@yield('metasdos')

@endsection
@section('styles')

	@yield('stylesdos')
@endsection


@section('content')


<div id="news">
    <div class="row">
        

	@yield('contentblog')

	@include('secciones.partials._rightband')


	</div>
</div>

@endsection

@section('scripts')
	@yield('scriptsdos')
@endsection