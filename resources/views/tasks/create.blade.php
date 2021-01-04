@extends('layouts.app')
@section('content')
    <h1>Crear Tarea</h1>

    <form method="POST" action="{{route('tasks.update')}}">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" name="category" id="exampleFormControlSelect1">
            <option value="trabajo" {{old('category') == 'trabajo' ? 'selected' : ''}}>Trabajo</option>
            <option value="examen" {{old('category') == 'examen' ? 'selected' : ''}}>Examen</option>
            <option value="otro" {{old('category') == 'otro' ? 'selected' : ''}}>Otro</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
@endsection