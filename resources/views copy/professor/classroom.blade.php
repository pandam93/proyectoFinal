@extends('layouts\app-professor')
@section('css-extra')
<link href="{{ asset('css/professor-classroom.css') }}" rel="stylesheet" />
@endsection
@section('content')
<main role="main">
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
            @foreach ($students as $student)
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                  <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img
                          class="card-img-top"
                          src="{{$student->profile->photo}}"
                          alt="Card image cap"
                          height="200px"
                        />
                        </div>
                        <div class="flip-card-back-boy">
                          <h1>{{ $student->name }}</h1> 
                          <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">1</button>
                              <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">2</button>
                              <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">3</button>
                              <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">4</button>
                            </div>
                        </div>
                      </div>
                    </div>
                  <div class="card-body">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="btn-group">
                        <label class="btn btn-secondary active">
                            <input type="checkbox" checked autocomplete="off"> Falta
                          </label>
                          <label class="btn btn-secondary">
                            <input type="checkbox" autocomplete="off"> Retraso
                          </label>
                      </div>
                    <a href="{{action('UserController@studentFile', ['id' => $student->id])}}">Perfil</a>
    
                  </div>
                  </div>
                </div>
            </div>
            @endforeach
          
          
  </main>
@endsection