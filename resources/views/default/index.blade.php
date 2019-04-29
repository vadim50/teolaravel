@extends('default.layouts.layout')

@section('navbar')
	@parent
@endsection

@section('header')
	@parent
@endsection

@section('sidebar')
	@parent
<div class="sidebar-module">
	<h4>About</h4>
	<p>Etisam VArhfh kgfkf </p>
</div>
@endsection

 @section('content')
   @include('default.content')
    @endsection