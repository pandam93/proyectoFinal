@extends('layouts.app')
@push('css')
<link href="{{ asset('css/student/home.css') }}" rel="stylesheet">
@endpush
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
  </ol>
</nav>

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
          >    Area Personal
          </a
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

    <div id="bloque-2" class="col-8">
        <div class="row">
          <div class="container-fluid">
            <div class="tab-content" id="nav-tabContent">
              <div
                class="tab-pane fade show active"
                id="list-home"
                role="tabpanel"
                aria-labelledby="list-home-list"
              >
            <div class="jumbotron p-3 rounded box-shadow">
              <h1 class="display-4">Hola, Carlos!</h1>
              <div class="my-3 p-3 bg-white rounded box-shadow">
                <h6 class="border-bottom border-gray pb-2 mb-0">
                  Suggestions
                </h6>
                <div class="media text-muted pt-3">
                  <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_176441de30f%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_176441de30f%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px">
                  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                      <strong class="text-gray-dark">Full Name</strong>
                      <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                  </div>
                </div>
                <div class="media text-muted pt-3">
                  <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_176441de310%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_176441de310%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px">
                  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                      <strong class="text-gray-dark">Full Name</strong>
                      <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                  </div>
                </div>
                <div class="media text-muted pt-3">
                  <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_176441de311%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_176441de311%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px">
                  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
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
              <div
              class="tab-pane fade"
              id="list-profile"
              role="tabpanel"
              aria-labelledby="list-profile-list"
            >
              <div class="row">
                <!--Me gustaria ver de sacar esto-->
                <div class="card col-3" style="border: none">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                  </div>
                  <img
                    class="card-img-top"
                    src="/professor/imageGuy.jpg"
                    alt="Card image cap"
                  />
                </div>
                <form class="col-9 my-auto">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail4"
                        placeholder="Email"
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputName">Name</label>
                      <input
                        type="name"
                        class="form-control"
                        id="inputName"
                        placeholder="Name"
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
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address </label>
                    <input
                      type="text"
                      class="form-control"
                      id="inputAddress"
                      placeholder="Apartment, studio, or floor"
                    />
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity" />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control">
                        <option selected="">Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="inputZip" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="false">Profesores</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Nakamas</a>
                </li>
              </ul>
            </div>
            <div class="row my-3">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                  <div class="container">
                    <div class="row">
                  {{--@foreach ($teachers as $item)--}}
                  <div class="col-3">
                    <div class="card  mb-4">
                      <img class="card-img-top" src="item->profile->photo" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">item->name</h5>
                        <p class="card-text"> Profesor de item->subjects->first()->name.</p>
                        <a href="#" class="btn btn-primary">Enviar un mensaje?</a>
                      </div>
                    </div>
                  </div>
                  {{--@endforeach--}}
                </div>
              </div>
                </div>
                <div class="tab-pane fade" id="student" role="tabpanel" aria-labelledby="student-tab">
                  <div class="container">
                    <div class="row">
                  {{--@foreach ($students as $item)--}}
                  <div class="col-3">
                    <div class="card  mb-4">
                      <img class="card-img-top" src="item->profile->photo" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">item->name</h5>
                        <!--<p class="card-text"> Profesor de item->subjects->first()->name.</p> -->
                        <a href="#" class="btn btn-primary">Enviar un mensaje?</a>
                      </div>
                    </div>
                  </div>
                  {{--@endforeach--}}
                    </div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>

    <div id="#bloque-3" class="col-2">
      <div class="card mb-3">
        <div class="card-header">Proximos eventos</div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">
            With supporting text below as a natural lead-in to additional
            content.
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">Proximos eventos</div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">
            With supporting text below as a natural lead-in to additional
            content.
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>
@endsection