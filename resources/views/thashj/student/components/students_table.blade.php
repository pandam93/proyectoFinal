<div class="tab-pane fade show active" id="tab-students" role="tabpanel" aria-labelledby="home-tab">
<div class="tab-content" id="mySquadContent">
@foreach ($students as $item)
@if ($loop->first)
<div class="tab-pane fade show active" id="tab-pag-students-{{$loop->iteration}}" role="tabpanel" aria-labelledby="nav-link-students">
  <div class="container">
    <div class="row">
@endif
    <div class="col-3">
      <div class="card  mb-4">
      <img class="card-img-top" src="{{$item->photo}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$item->name}}</h5>
          <a href="#" class="btn btn-primary">Enviar un mensaje?</a>
        </div>
      </div>
    </div>
@if ($loop->iteration % 8 == 0)
</div>
</div>
</div>    
@unless ($loop->last)
<div class="tab-pane fade show" id="tab-pag-students-{{$loop->iteration}}" role="tabpanel" aria-labelledby="nav-link-students">
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
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-pag-students-1" role="tab" aria-controls="home" aria-selected="true">1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab-pag-students-8" role="tab" aria-controls="profile" aria-selected="false">2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab-pag-students-16" role="tab" aria-controls="contact" aria-selected="false">3</a>
    </li>
  </ul>

</div>

