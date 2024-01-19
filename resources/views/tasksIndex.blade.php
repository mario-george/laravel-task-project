@extends('layouts.layout')
@section('title','List of Tasks')


@section('content')


@foreach($tasks as $task)
<p>

    {{$task->title}}
</p>

@endforeach
@forelse($tasks as $task)
<a href="/tasks/{{$task->id}}">{{$task->title}}</a><br>
@empty
<h1>There is no tasks</h1>

@endforelse
<h1>route() function generates a URL for the named route</h1>

@forelse($tasks as $task)
<a href="{{route('tasks.show',['id'=>$task->id])}}">{{$task->title}}</a>
<br>
@empty
@endforelse
@endsection