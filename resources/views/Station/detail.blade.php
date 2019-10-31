@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>Detalles</h3>
        </div>
      </div>
      <ul>
        <li><div class="row">
        <div class="col-xl-">
          <div class="form-group">
            <strong>Nombre:</strong>{{$station->name}}
          </div>
        </div>
      </div></li>
        <li><div class="col-xl-">
          <div class="form-group">
            <strong>Latitud:</strong>{{$station->latitude_pos}}
          </div>
        </div>
      </li>
        <li><div class="col-xl-">
          <div class="form-group">
            <strong>Longitud:</strong> {{$station->longitude_pos}}
          </div>
        </li>
        <div class="col-sm-4">
          <a href="{{route('station.index')}}" class="btn btn-sm btn-success">Volver</a>
        </div>
      </div>
    </li>
  </ul>
  
  </div>

@endsection
