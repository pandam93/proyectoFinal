@extends('layouts.app')
@push('css')
<link href="{{ asset('css/classroom/list.css') }}" rel="stylesheet">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($integrants as $item)
            <div class="col-3 card wow animate__heartBeat" style="border:none;">
                <div class="mx-auto" >
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                      <img src="{{$item->profile->photo}}" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back my-6">
                        <h1>John Doe</h1> 
                        <p>Architect & Engineer</p> 
                        <p>We love that guy</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-body" style="width:300px;">
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection