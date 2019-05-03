@extends('default.layouts.layout')

@section('header')
@parent
@endsection

@section('content')
	<div class="col-md-9">
		<pre>
			{{ print_r(Session::all()) }}
		</pre>
		
		<div>
			<h2>Contact Us!</h2>
		</div>

		<p>
			This is a template a simple marketing or information website.
			It includes a large...
		</p>
		<form method="post" action="{{ route('contact',['name'=>'Hello']) }}">
			@csrf
			<div class="form-group">
				<label for="name">Name:</label>
				<input class="form-control" type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input class="form-control" type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="site">Site:</label>
				<input class="form-control" type="text" name="site" value="{{ old('site') }}" id="site" placeholder="Site">
			</div>
			<div class="form-group">
				<label for="text">Text:</label>
				<textarea class="form-control" id="text" name="text" rows="3">{{ old('text') }}</textarea>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>  
	</div>
@endsection