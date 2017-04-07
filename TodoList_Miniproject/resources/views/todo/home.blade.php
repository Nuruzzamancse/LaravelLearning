@extends('layout.app')

@section('body')
	<br>

	<a href="todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-6 col-lg-offset-3">

		<center><h1>To Lists</h1></center>
		<ul class="list-group col-lg-8"> 
			@foreach($todos as $todo)
			<li class="list-group-item">
				<a href="{{'/todo/'. $todo->id}}">{{($todo->title)}}</a>
				<span class="pull-right  ">{{$todo->created_at->diffForHumans()}}</span>
			</li>
			@endforeach
		</li>
		</ul>

		<ul class="list-group col-lg-4"> 
			@foreach($todos as $todo)
			<li class="list-group-item">
				<a href="{{'/todo/'. $todo->id.'/edit'}}">Edit</a>
				
			</li>
			@endforeach
		</li>
		</ul>

		
	</div>
	{{-- expr --}}
@endsection