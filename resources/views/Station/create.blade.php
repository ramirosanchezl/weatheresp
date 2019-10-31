@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Nueva Estación</h3>
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

    <form action="{{route('station.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-sm-4">
          <strong>Nombre:</strong>
          <input type="text" name="name" class="form-control" placeholder="">
        </div>
        <br>
        <div class="col-sm-4">
          <strong>Latitud:</strong>
          <input type="text" name="latitude_pos" class="form-control" placeholder="">
        </div>
        <br>
        <div class="col-sm-4">
          <strong>Longitud:</strong>
          <input type="text" name="longitude_pos" class="form-control" placeholder="">
        </div>
        <br>
        <div class="col-sm-4">
          <strong>Pronóstico:</strong>
          <input type="text" name="forecast" class="form-control" placeholder="">
        </div>
        <div class="col-sm-4">
          <strong>ID Pronóstico:</strong>
          <input type="text" name="id_forecast" class="form-control" placeholder="">
        </div>
        <br>
        <div class="col-sm-4">
          <strong>Ubicación:</strong>
          <input type="text" name="location" class="form-control" placeholder="">
        </div>
        <br>
        <div class="col-sm-4">
          <strong>Vientos:</strong>
          <input type="text" name="winds" class="form-control" placeholder="">
        </div>
        <br>
        <div class="col-sm-4">
          <a href="{{route('station.index')}}" class="btn btn-sm btn-success">Volver</a>
          <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
        </div>
      </div>
    </form>

  </div>
@endsection
