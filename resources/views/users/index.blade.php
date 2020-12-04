@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users Page</div>
                <div class="card-body">
                    @forelse ($users as $user)
                    <li class="list-group-item">
                    <h2 class="blockquote-reverse">
                    <a href=" {{ url('/users/'. $user->id) }}">{{ $user->name }}</a>
                    </h2>
                    </li>
                    @empty
                        <p>No hay usuarios.</p>
                    @endforelse                                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
