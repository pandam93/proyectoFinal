@extends('layouts.app')
@section('content')
<div class="container">
<div class="card-header">Recent Tasks</div>
<div class="row justify-content-left">
<div class="col-md-4">
<div class="card">
<div class="card-body">
Categories
<p></p>
Articles
<p></p>
Add Users
<p></p>
</div>
</div>
</div>
<div class="col-md-8">
<div class="card">
<div class="card-body">
<form enctype="multipart/form-data" method="post"
action="{{ route('article.update', [$article->id]) }}">
{{ csrf_field() }}
<input type="hidden" name="_method" value="put">
<div class="form-group">
<label for="post-name">Title
<span class="required">*</span>
</label>
<input placeholder="Enter title" id="post-title" value="{{ $article->title }}"
required name="title" spellcheck="false" class="form-control"/>
</div>
@if($categories == null)
<input class="form-control" type="hidden" required name="category_id"
value="{{ $category_id }}"/>
</div>
@endif
@if($categories != null)
<div class="form-group">
<label for="category-content">
Select Category</label>
<span class="required">*</span>
<select name="category_id"
class="form-control" >
@foreach($categories as $category)
<option value="{{$category->id}}">
    {{$category->name}}
</option>
@endforeach
</select>
</div>
@endif
<div class="form-group">
<label for="project-content">
News Content</label>
<span class="required">*</span>
<textarea placeholder="Enter
body"
style="resize:
vertical"
id="post-body"
required
name="body"
rows="10"
spellcheck="false"
class="form-control
autosize-target textleft">
{{ $article->body }}
</textarea>
</div>
@if($writers == null)
<input class="form-control"
type="hidden" required
name="writer_id"
value="{{ $writer_id }}"/>
</div>
@endif
@if($writers != null)
<div class="form-group">
    <label for="category-content">
        Select Writer</
        label>
        <span class="required">*</
        span>
        <select name="writer_id"
        class="form-control" >
        @foreach($writers as
        $writer)
        <option value="{{
        $writer->id }}">
        {{ $writer->name
        }}
        </option>
        @endforeach
        </select>
        </div>
        @endif
        <div class="form-group">
        <label class="form-group">
        <input type="hidden"
        name="MAX_FILE_SIZE"
        value="3000000" />
        <input name="image"
        type="file">
        <span class="custom-file-control">
        Upload Image</span>
        </label>
        </div>
        <div class="form-group">
        <label for="post-name">Tag
        <span class="required">*</span>
        </label>
        <input placeholder="Enter Tags" id="article-title" value="{{
            $article->tag }}"
            required name="tag" spellcheck="false" class="form-control"/>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary"
            value="Submit"/>
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            @endsection