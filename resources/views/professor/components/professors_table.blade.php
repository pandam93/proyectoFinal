<div class="tab-pane fade" id="tab-professors" role="tabpanel" aria-labelledby="home-tab">
  <div class="tab-content" id="mySquadContent">
  @foreach ($professors as $item)
  @if ($loop->first)
  <div class="tab-pane fade show active" id="tab-pag-professors-{{$loop->iteration}}" role="tabpanel" aria-labelledby="nav-link-professors">
    <div class="container">
      <div class="row">
  @endif
      <div class="col-3">
      <div class="card  mb-4 {{(Auth::user()->id == $item->id) ? 'bg-primary' : ''}}">
        <img class="card-img-top" src="{{$item->photo}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            @unless (Auth::user()->id == $item->id)
            <a href="#" class="btn btn-primary">Enviar un mensaje?</a>
            @endunless
          </div>
        </div>
      </div>
  @if ($loop->iteration % 8 == 0)
  </div>
  </div>
  </div>    
  @unless ($loop->last)
  <div class="tab-pane fade show" id="tab-pag-professors-{{$loop->iteration}}" role="tabpanel" aria-labelledby="nav-link-professors">
    <div class="container">
      <div class="row">
  @endunless
  @endif
  @if ($loop->last)
  </div>
  </div>
  </div>  
  @endif
  @endforeach
  </div>
    <ul class="nav nav-pills ml-4" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-pag-professors-1" role="tab" aria-controls="home" aria-selected="true">1</a>
      </li>
    </ul>
  </div>
  
  