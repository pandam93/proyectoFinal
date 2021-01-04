@extends('layouts.app')
@section('content')
<p>{{$task->id}}</p><h1>{{$task->title}}</h1>
<h3>{{$task->body}}</h3>
@endsection