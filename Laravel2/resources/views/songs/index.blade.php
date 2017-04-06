@extends('layout.app')

@section('title','Songs')

@section('body')
	{{'Songs are Everything'}}

	@foreach ($songs as $song)
		{{$song->title}}
	@endforeach
@endsection