@extends('todo.create')


@section('EditId',$item->id)
@section('EditTitle',$item->title)
@section('EditBody',$item->body)

@section('EditMethod')
  {{method_field('PUT')}}
@endsection