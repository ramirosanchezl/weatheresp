@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Editar Estaciones</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Ups! </strong> Parece que hubo problemas con tu ingreso.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

  <form action="{{route('station.update',$station->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Nombre:</strong>
          <input type="text" name="name" class="form-control" value="{{$station->name}}">
        </div>
        <div class="col-md-12">
          <strong>Latitud:</strong>
          <input type="text" name="latitude_pos" class="form-control" value="{{$station->latitude_pos}}">
        </div>
        <div class="col-md-12">
          <strong>Longitud:</strong>
          <input type="text" name="longitude_pos" class="form-control" value="{{$station->longitude_pos}}">
        </div>
        <div class="col-md-12">
          <strong>Pronóstico:</strong>
          <input type="text" name="forecast" class="form-control" value="{{$station->forecast}}">
        </div>
        <div class="col-md-12">
          <strong>ID Pronóstico:</strong>
          <input type="text" name="forecast_id" class="form-control" value="{{$station->forecast_id}}">
        </div>
        <div class="col-md-12">
          <strong>Ubicación:</strong>
          <input type="text" name="location" class="form-control" value="{{$station->location}}">
        </div>
        <div class="col-md-12">
          <strong>Vientos:</strong>
          <input type="text" name="winds" class="form-control" value="{{$station->winds}}">
        </div>

        <div class="col-md-12">
          <a href="{{route('station.index')}}" class="btn btn-sm btn-success">Volver</a>
          <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
        </div>
      </div>
  </form>
 </div>
@endsection
