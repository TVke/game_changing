@extends('layout')
@section('content')
	<div class="win">
		<canvas id="confetti" width="1" height="1"></canvas>
		<a href="{{ route('overzicht') }}" class="backButton">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
			overzicht</a>
		<h2 class="heading-1">Gewonnen!</h2>
		<form action="{{ route('add_card',['game'=>$game->id]) }}" method="post" class="var-suggestion">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<label for="suggestion">Een leuke regel om toe te voegen?</label>
			<input name="suggestion" id="suggestion">
			<input type="submit" value="stel voor">
		</form>
	</div>
	<script src="{{ asset('/js/confetti.js') }}"></script>
@endsection