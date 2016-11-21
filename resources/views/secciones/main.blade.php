@extends('welcome')

<!--@section('title', '| Blog')-->
@yield('styles')

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