@extends('layouts.app')
@push('css')
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
                @foreach ($classrooms as $classroom )
                <a
                class="list-group-item list-group-item-action"
                id="list-messages-list"
                href="{{ route('/') }}"
              >
            <span class="ml-2">{{ $classroom->short_name }}</span></a
              >
                @endforeach
            </div>
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
        <div class="embed-responsive embed-responsive-16by9">
          <iframe
            src="https://www.youtube.com/embed/7GH1ktTXNrM"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div id="bloque-2" class="col-9">
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="list-home"
            role="tabpanel"
            aria-labelledby="list-home-list"
          >
            <div class="jumbotron p-3 rounded box-shadow">
              <div class="container">
                <h1 class="display-4">Hola, Carlos!</h1>
                <div class="my-3 p-3 bg-white rounded box-shadow">
                  <h6 class="border-bottom border-gray pb-2 mb-0">
                    Suggestions
                  </h6>
                  <div class="media text-muted pt-3">
                    <img
                      data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1"
                      alt="32x32"
                      class="mr-2 rounded"
                      src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_176441de30f%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_176441de30f%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                      data-holder-rendered="true"
                      style="width: 32px; height: 32px"
                    />
                    <div
                      class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray"
                    >
                      <div
                        class="d-flex justify-content-between align-items-center w-100"
                      >
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                      </div>
                      <span class="d-block">@username</span>
                    </div>
                  </div>
                  <div class="media text-muted pt-3">
                    <img
                      data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1"
                      alt="32x32"
                      class="mr-2 rounded"
                      src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_176441de310%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_176441de310%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                      data-holder-rendered="true"
                      style="width: 32px; height: 32px"
                    />
                    <div
                      class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray"
                    >
                      <div
                        class="d-flex justify-content-between align-items-center w-100"
                      >
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                      </div>
                      <span class="d-block">@username</span>
                    </div>
                  </div>
                  <div class="media text-muted pt-3">
                    <img
                      data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1"
                      alt="32x32"
                      class="mr-2 rounded"
                      src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_176441de311%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_176441de311%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                      data-holder-rendered="true"
                      style="width: 32px; height: 32px"
                    />
                    <div
                      class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray"
                    >
                      <div
                        class="d-flex justify-content-between align-items-center w-100"
                      >
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                      </div>
                      <span class="d-block">@username</span>
                    </div>
                  </div>
                  <small class="d-block text-right mt-3">
                    <a href="#">All suggestions</a>
                  </small>
                </div>
              </div>
            </div>

            <div class="row">
                @forelse ($classrooms as $classroom)
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">{{$classroom->short_name}}</h5>
                        <p class="card-text">
                            Esta es la clase de {{ ucwords($classroom->name) }} <br />
                        </p>
                    <a href="{{ url('/home/classroom/' . $classroom->id)}}" class="btn btn-primary">Ir a la clase</a>
                      </div>
                    </div>
                  </div>
                @empty
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">No estas asignado a ninguna clase como profesor</h5>
                        <p class="card-text">
                          Tu estas seguro de que trabajas aqui? Mejor habla con el director...
                        </p>
                    <a href="https://www.linkedin.com" class="btn btn-primary">Buscar empleo</a>
                      </div>
                    </div>
                  </div>
                @endforelse
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="list-profile"
            role="tabpanel"
            aria-labelledby="list-profile-list"
          >
            <div class="row">
              <!--Me gustaria ver de sacar esto-->
              <div class="card col-md-4" style="border: none">
                <div class="card-body">
                <h5 class="card-title">{{ Auth::user()->name }} {{$profile->surname}}</h5>
                </div>
                <img
                  class="card-img-top"
                    src="{{$profile->photo}}"
                  alt="Card image cap"
                />
              </div>
              <form class="col-md-8 my-auto">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="inputEmail4"
                      placeholder="Email"
                      value="{{Auth::user()->email}}"
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input
                      type="name"
                      class="form-control"
                      id="inputName"
                      placeholder="Name"
                      value="{{Auth::user()->name}}"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPhone">Phone</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputPhone"
                    placeholder="1234"
                    value="{{$profile->phone}}"
                  />
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address </label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress"
                    placeholder="Apartment, studio, or floor"
                    value="{{$profile->address}}"
                  />
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity"
                    placeholder="Navalmoral de la Mata"
                    value="{{$profile->city}}"/>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Provincia</label>
                    <input type="text" class="form-control" id="inputState"
                    placeholder="Caceres"
                    value="{{$profile->state}}"/>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip"
                    placeholder="10300"
                    value="{{$profile->zip}}" />
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="list-settings"
            role="tabpanel"
            aria-labelledby="list-settings-list"
          >
            En construccion...
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection