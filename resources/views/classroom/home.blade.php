@extends('layouts.app')
@push('css')
<link href="{{ asset('css/classroom/list.css') }}" rel="stylesheet">
<link href="{{ asset('css/professor/home.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">
  <div class="row">
    <div id="bloque-1" class="col-2">
          <div class="list-group sticky-top" id="list-tab" role="tablist">
            <a
              class="list-group-item list-group-item-action active"
              id="list-home-list"
              data-toggle="list"
              href="#list-home"
              role="tab"
              aria-controls="home"
              >Area Personal</a
            >
            <a
              class="list-group-item list-group-item-action"
              id="list-profile-list"
              data-toggle="list"
              href="#list-profile"
              role="tab"
              aria-controls="profile"
              >Profile</a
            >
            <span data-toggle="list">
              <a
                class="list-group-item list-group-item-action"
                data-toggle="collapse"
                href="#multiCollapseExample1"
                role="button"
                aria-expanded="false"
                aria-controls="multiCollapseExample1"
                >Cursos</a
              ></span
            >
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="list-group" id="list-tab" role="tablist">
                <a
                  class="list-group-item list-group-item-action"
                  id="list-messages-list"
                  data-toggle="list"
                  href="#list-messages"
                  role="tab"
                >
                  <span class="ml-2">1ro DAM</span></a
                >
                <a
                  class="list-group-item list-group-item-action"
                  id="list-messages-list2"
                  data-toggle="list"
                  href="#list-messages2"
                  role="tab"
                >
                  <span class="ml-2">2do DAM</span></a
                >
              </div>
            </div>
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <a
                class="list-group-item list-group-item-action"
                id="list-messages-list"
                data-toggle="list"
                href="#list-messages"
                role="tab"
                aria-controls="messages"
                >Cursos</a
              >
            </div>
            <a
              class="list-group-item list-group-item-action"
              id="list-settings-list"
              data-toggle="list"
              href="#list-settings"
              role="tab"
              aria-controls="settings"
              >Sala de profesores
              <span class="badge badge-primary badge-pill">2</span></a
            >
          </div>
    </div>

    <div id="bloque-2" class="col-9">
      <div class="container-fluid">
        <div class="row">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="true">Profesores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Alumnos</a>
            </li>
          </ul>
        </div>
        <div class="row my-3">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
              <div class="container">
                <div class="row">
              @foreach ($teachers as $item)
              <div class="col-3">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{$item->profile->photo}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">{{$item->role}}.</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
            </div>
            <div class="tab-pane fade" id="student" role="tabpanel" aria-labelledby="student-tab">
              <div class="container">
                <div class="row">
              @foreach ($students as $item)
              <div class="col-3">
                <div class="card mb-4">
                  <img class="card-img-top" src="{{$item->profile->photo}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">{{$item->role}}.</p>
                  </div>
                </div>
              </div>
              @endforeach
                </div></div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
@endsection