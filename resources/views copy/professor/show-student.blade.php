@extends('layouts\app-professor')
@section('css-extra')
<link href="{{ asset('css/professor-classroom.css') }}" rel="stylesheet" />
<link href="{{ asset('css/student-file.css') }}" rel="stylesheet" />
@endsection
@section('content')
<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container container-ficha">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a
            class="nav-link active"
            id="Asistencia-tab"
            data-toggle="tab"
            href="#Asistencia"
            role="tab"
            aria-controls="Asistencia"
            aria-selected="true"
            >Asistencia</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            id="profile-tab"
            data-toggle="tab"
            href="#profile"
            role="tab"
            aria-controls="profile"
            aria-selected="false"
            >Profile</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            id="contact-tab"
            data-toggle="tab"
            href="#contact"
            role="tab"
            aria-controls="contact"
            aria-selected="false"
            >Contact</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            id="observaciones-tab"
            data-toggle="tab"
            href="#observaciones"
            role="tab"
            aria-controls="observaciones"
            aria-selected="false"
          >
            Observaciones <span class="badge badge-warning">4</span>
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            id="Registro-evaluacion-tab"
            data-toggle="tab"
            href="#Registro-evaluacion"
            role="tab"
            aria-controls="Registro-evaluacion"
            aria-selected="false"
            >Registro-evaluacion</a
          >
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div
        class="tab-pane fade show active"
        id="Asistencia"
        role="tabpanel"
        aria-labelledby="Asistencia-tab"
      >

      <div class="table-responsive">
        <div class="wrapper">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">2020/2021</th>
                    @for ($i = 1; $i < 31; $i++)
                    <th scope="col">{{$i}}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < 12; $j++)
                <tr>
                    <th
                      scope="row"
                      style="width: 10%"
                      class="sticky-col first-col"
                    >
                      {{ $months[$j]}}
                    </th>
                    @for ($i = 1; $i < 31; $i++)
                    <td scope="col"></td>
                    @endfor
                </tr>
                @endfor

            </tbody>
          </table>
        </div>
    </div>
</div>
<div
            class="tab-pane fade"
            id="profile"
            role="tabpanel"
            aria-labelledby="profile-tab"
          >
            <div class="row">
              <div class="card col-md-4" style="border: none">
                <div class="card-body">
                  <h5 class="card-title">{{ $user->name }}</h5>
                </div>
                <img
                  class="card-img-top"
                src="{{$user->img}}"
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
                      value="{{$user->email}}"
                      readonly
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input
                      type="name"
                      class="form-control"
                      id="inputName"
                      placeholder="Name"
                      value="{{$user->name}}"
                      readonly
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
                    readonly
                  />
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address </label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress"
                    placeholder="Apartment, studio, or floor"
                    readonly
                  />
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" readonly />
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="10300" readonly />
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="contact"
            role="tabpanel"
            aria-labelledby="contact-tab"
          >
            <div class="container p-0">
              <div class="card card-inbox">
                <div class="row g-0">
                  <div class="py-2 px-4">
                    <div class="d-flex align-items-center py-1">
                      <div class="position-relative">
                        <img
                      src="{{ $user->img }}"
                          class="rounded-circle mr-1"
                          alt="Sharon Lessman"
                          width="40"
                          height="40"
                        />
                      </div>
                      <div class="flex-grow-1 pl-3">
                      <strong>{{$user->name}}</strong>
                        <!--<div class="text-muted small"><em>Typing...</em></div>-->
                      </div>
                    </div>
                  </div>

                  <div class="position-relative">
                    <div class="chat-messages p-4">
                      <div class="chat-message-right pb-4">
                        <div>
                          <img
                            src="{{Auth::user()->img}}"
                            class="rounded-circle mr-1"
                            alt="Chris Wood"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:33 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3"
                        >
                          <div class="font-weight-bold mb-1">You</div>
                          Lorem ipsum dolor sit amet, vis erat denique in,
                          dicunt prodesset te vix.
                        </div>
                      </div>

                      <div class="chat-message-left pb-4">
                        <div>
                          <img
                            src="{{ $user->img }}"
                            class="rounded-circle mr-1"
                            alt="Sharon Lessman"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:34 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3"
                        >
                          <div class="font-weight-bold mb-1">
                            Sharon Lessman
                          </div>
                          Sit meis deleniti eu, pri vidit meliore docendi ut, an
                          eum erat animal commodo.
                        </div>
                      </div>

                      <div class="chat-message-right mb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar1.png"
                            class="rounded-circle mr-1"
                            alt="Chris Wood"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:35 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3"
                        >
                          <div class="font-weight-bold mb-1">You</div>
                          Cum ea graeci tractatos.
                        </div>
                      </div>

                      <div class="chat-message-left pb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            class="rounded-circle mr-1"
                            alt="Sharon Lessman"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:36 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3"
                        >
                          <div class="font-weight-bold mb-1">
                            Sharon Lessman
                          </div>
                          Sed pulvinar, massa vitae interdum pulvinar, risus
                          lectus porttitor magna, vitae commodo lectus mauris et
                          velit. Proin ultricies placerat imperdiet. Morbi
                          varius quam ac venenatis tempus.
                        </div>
                      </div>

                      <div class="chat-message-left pb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            class="rounded-circle mr-1"
                            alt="Sharon Lessman"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:37 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3"
                        >
                          <div class="font-weight-bold mb-1">
                            Sharon Lessman
                          </div>
                          Cras pulvinar, sapien id vehicula aliquet, diam velit
                          elementum orci.
                        </div>
                      </div>

                      <div class="chat-message-right mb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar1.png"
                            class="rounded-circle mr-1"
                            alt="Chris Wood"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:38 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3"
                        >
                          <div class="font-weight-bold mb-1">You</div>
                          Lorem ipsum dolor sit amet, vis erat denique in,
                          dicunt prodesset te vix.
                        </div>
                      </div>

                      <div class="chat-message-left pb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            class="rounded-circle mr-1"
                            alt="Sharon Lessman"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:39 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3"
                        >
                          <div class="font-weight-bold mb-1">
                            Sharon Lessman
                          </div>
                          Sit meis deleniti eu, pri vidit meliore docendi ut, an
                          eum erat animal commodo.
                        </div>
                      </div>

                      <div class="chat-message-right mb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar1.png"
                            class="rounded-circle mr-1"
                            alt="Chris Wood"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:40 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3"
                        >
                          <div class="font-weight-bold mb-1">You</div>
                          Cum ea graeci tractatos.
                        </div>
                      </div>

                      <div class="chat-message-right mb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar1.png"
                            class="rounded-circle mr-1"
                            alt="Chris Wood"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:41 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3"
                        >
                          <div class="font-weight-bold mb-1">You</div>
                          Morbi finibus, lorem id placerat ullamcorper, nunc
                          enim ultrices massa, id dignissim metus urna eget
                          purus.
                        </div>
                      </div>

                      <div class="chat-message-left pb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            class="rounded-circle mr-1"
                            alt="Sharon Lessman"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:42 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3"
                        >
                          <div class="font-weight-bold mb-1">
                            Sharon Lessman
                          </div>
                          Sed pulvinar, massa vitae interdum pulvinar, risus
                          lectus porttitor magna, vitae commodo lectus mauris et
                          velit. Proin ultricies placerat imperdiet. Morbi
                          varius quam ac venenatis tempus.
                        </div>
                      </div>

                      <div class="chat-message-right mb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar1.png"
                            class="rounded-circle mr-1"
                            alt="Chris Wood"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:43 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3"
                        >
                          <div class="font-weight-bold mb-1">You</div>
                          Lorem ipsum dolor sit amet, vis erat denique in,
                          dicunt prodesset te vix.
                        </div>
                      </div>

                      <div class="chat-message-left pb-4">
                        <div>
                          <img
                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            class="rounded-circle mr-1"
                            alt="Sharon Lessman"
                            width="40"
                            height="40"
                          />
                          <div class="text-muted small text-nowrap mt-2">
                            2:44 am
                          </div>
                        </div>
                        <div
                          class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3"
                        >
                          <div class="font-weight-bold mb-1">
                            Sharon Lessman
                          </div>
                          Sit meis deleniti eu, pri vidit meliore docendi ut, an
                          eum erat animal commodo.
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flex-grow-0 py-3 px-4">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type your message"
                      />
                      <button class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
          class="tab-pane fade"
          id="observaciones"
          role="tabpanel"
          aria-labelledby="observaciones-tab"
        >
          <table class="table table-hover borderless">
            <thead>
              <tr>
                <th scope="col" style="width: 5%">Fecha</th>
                <th scope="col" style="width: 95%">Comentario</th>
                <th scope="col" style="width: 5%">Recordar?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">0</th>
                <td>
                  <form action="">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        rows="2"
                        id="comment"
                      ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                  </form>
                </td>
                <td>
                  <div
                    class="form-check"
                    style="text-align: center; padding-top: 10px"
                  >
                    <input
                      class="form-check-input position-static"
                      type="checkbox"
                      id="blankCheckbox"
                      value="option1"
                      aria-label="..."
                      style="width: 25px; height: 25px"
                    />
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Asperiores itaque dolorem, similique quasi aut voluptatibus
                  atque ea aperiam mollitia! Facilis consequuntur consectetur
                  atque dicta nam iste consequatur ipsam doloremque deleniti?
                </td>
              </tr>
            </tbody>
        </table>
      </div>


      <div
            class="tab-pane fade"
            id="Registro-evaluacion"
            role="tabpanel"
            aria-labelledby="Registro-evaluacion-tab"
          >
            <div class="card text-center mt-3">
              <div class="card-header">
                <h5>Exámenes</h5>
              </div>
              <div class="card-body">
                <p class="card-text">
                  Resumen y promedio de actividades y notas.
                </p>
                <p>
                  <a
                    class="btn btn-primary mt-4"
                    data-toggle="collapse"
                    href="#multiCollapseExample1"
                    role="button"
                    aria-expanded="false"
                    aria-controls="multiCollapseExample1"
                    >1ra Evaluacion</a
                  >
                </p>
                <div class="row">
                  <div class="col">
                    <div
                      class="collapse multi-collapse"
                      id="multiCollapseExample1"
                    >
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Nota</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <p>
                  <a
                    class="btn btn-primary"
                    data-toggle="collapse"
                    href="#multiCollapseExample2"
                    role="button"
                    aria-expanded="false"
                    aria-controls="multiCollapseExample2"
                    >2da Evaluacion</a
                  >
                </p>
                <div class="row">
                  <div class="col">
                    <div
                      class="collapse multi-collapse"
                      id="multiCollapseExample2"
                    >
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Nota</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>efsfe</td>
                            <td>sef</td>
                            <td>@sefsef</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <p>
                  <a
                    class="btn btn-primary"
                    data-toggle="collapse"
                    href="#multiCollapseExample3"
                    role="button"
                    aria-expanded="false"
                    aria-controls="multiCollapseExample3"
                    >3da Evaluacion</a
                  >
                </p>
                <div class="row">
                  <div class="col">
                    <div
                      class="collapse multi-collapse"
                      id="multiCollapseExample3"
                    >
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Nota</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>QEQWEQWE</td>
                            <td>sefASDFSADFASDF</td>
                            <td>@ASDFASDFSADF</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TRABAJOS-->
            <div class="card text-center mt-3">
              <div class="card-header"><h5>Trabajos</h5></div>
              <div class="card-body">
                <p class="card-text">
                  Resumen y promedio de actividades y notas.
                </p>
                <p>
                  <a
                    class="btn btn-primary mt-4"
                    data-toggle="collapse"
                    href="#multiCollapseExample4"
                    role="button"
                    aria-expanded="false"
                    aria-controls="multiCollapseExample4"
                    >1ra Evaluacion</a
                  >
                </p>
                <div class="row">
                  <div class="col">
                    <div
                      class="collapse multi-collapse"
                      id="multiCollapseExample4"
                    >
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Nota</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <p>
                  <a
                    class="btn btn-primary"
                    data-toggle="collapse"
                    href="#multiCollapseExample5"
                    role="button"
                    aria-expanded="false"
                    aria-controls="multiCollapseExample5"
                    >2da Evaluacion</a
                  >
                </p>
                <div class="row">
                  <div class="col">
                    <div
                      class="collapse multi-collapse"
                      id="multiCollapseExample5"
                    >
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Nota</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>efsfe</td>
                            <td>sef</td>
                            <td>@sefsef</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <p>
                  <a
                    class="btn btn-primary"
                    data-toggle="collapse"
                    href="#multiCollapseExample6"
                    role="button"
                    aria-expanded="false"
                    aria-controls="multiCollapseExample6"
                    >3da Evaluacion</a
                  >
                </p>
                <div class="row">
                  <div class="col">
                    <div
                      class="collapse multi-collapse"
                      id="multiCollapseExample6"
                    >
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Nota</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>QEQWEQWE</td>
                            <td>sefASDFSADFASDF</td>
                            <td>@ASDFASDFSADF</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


      </div>
    </div>
    <!-- /container -->
  </main>

@endsection