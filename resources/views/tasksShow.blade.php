
@extends('layouts.layout')

@section('title', $task->title)
<!-- no need for endsection if you are passing a string on the second arg of section -->
@section('content')
  <p>{{ $task->description }}</p>

  @if ($task->long_description)
    <p>{{ $task->long_description }}</p>
  @endif

  <p>{{ $task->created_at }}</p>
  <p>{{ $task->updated_at }}</p>
@endsection