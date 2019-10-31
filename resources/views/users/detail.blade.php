@extends('layouts.app')

@section('content')
  <div class="container" width=600px>
    <div class="row">
      <div class="col-sm-4">
        <h3>Detalles</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <strong>Nombre:</strong>{{$user->name}}
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <strong>Email:</strong>{{$user->email}}
        </div>
      </div>
      <div class="ccol-sm-4">
        <div class="form-group">
          <strong>Tipo:</strong> {{$user->type}}
        </div>
      </div>
      <div class="col-sm-4">
        <a href="{{route('users.index')}}" class="btn btn-sm btn-success">Volver</a>
      </div>
    </div>
  </div>
@endsection
