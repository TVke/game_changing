@extends('layout')
@section('content')
	<div class="win">
		<canvas id="confetti" width="100%" height="100%"></canvas>
		<a href="{{ route('overzicht') }}" class="backButton">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
			overzicht</a>
		<h2 class="heading-1">Gewonnen!</h2>
		@if(session('message'))
			<p class="message var-success">{{ session('message') }}</p>
		@endif
		@if($errors->has('suggestion'))
			<p class="message var-error">{{ $errors->first('suggestion')}}</p>
		@endif
		<form action="{{ route('add_card',['id'=>$game->id]) }}" method="post" class="var-suggestion">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<label for="suggestion">Een leuke regel om toe te voegen?</label>
			<input name="suggestion" id="suggestion" required>
			<input type="submit" value="stel voor">
		</form>
	</div>
	<script src="{{ asset('/js/confetti.js') }}"></script>
@endsection