@extends('layouts.app')
@section('content')
    <h1>Tareas</h1>
    @foreach ($tasks as $task)
        <p>{{ $task->id }} + {{ $task->title }}</p>
    @endforeach
@endsection