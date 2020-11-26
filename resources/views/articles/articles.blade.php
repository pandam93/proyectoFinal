@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 blog-main col-lg-8 blog-main col-sm-8 blog-main">
<div class="blog-post">
<ul class="list-group">
<div class="panel-heading">All Articles by <a href="/users/{{
$user->id }}">{{ $user->name }}</a> </div>
@foreach($user->articles as $article)
<li class="list-group-item">
<h2 class="blog-post-title">
<a href="{{url('/articles/' . $article->id )}}">{{ $article->title }}</a>
</h2>
</li>
@endforeach
</ul>
</div>
{{--<nav class="blog-pagination">
<a class="btn btn-outline-primary" href="#">Older</a>
<a class="btn btn-outline-secondary disabled" href="#">Newer
</a>
</nav>--}}
</div>
<aside class="col-md-4 blog-sidebar">
<div class="p-3">
<h3 class="blog-post-title">Know about {{ $article->user->name }}
</h3>
<hr class="linenums" color="red">
<div class="panel panel-default">
<div class="panel-heading">{{ $article->user->name }}'s
Profile</div>
<div class="panel-body">
    <li class="list-group-item-info">Name : {{ $article->user->name }}</li>
        <li class="list-group-item-info">Email: {{ $article->user->email }}</li>
        <li class="list-group-item-info">Classroom: {{ $article->user->profile->classroom }}</li>
        <li class="list-group-item-info">About: {{ $article->user->profile->about }}</li>
        </div>
        </div>
        </div>
        </aside>
        </div>
        </div>
        @endsection