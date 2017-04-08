@extends('layout.app')

@section('body')
	{{-- expr --}}
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
	<h1>  {{ ucfirst(substr(Route::currentRouteName(),5))}} Item</h1>

	<form class="form-horizontal" action="/todo/@yield('EditId')" method="post">
	{{csrf_field()}}
	@section('EditMethod')
		@show
  <fieldset>
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" name="title" class="form-control"  value=" @yield('EditTitle')" placeholder="Title">
        <br>
      </div>
         <div class="col-lg-10">
        <textarea class="form-control" name="body" placeholder="body" rows="5" id="textArea">@yield('EditBody')</textarea>
        <br>
          <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </fieldset>
 </form>
 	@include('todo.partials.errors');
	</div>

@endsection