@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Lista de Estaciones</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('station.create') }}">Crear una nueva Estacion</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

   <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
  <thead>
    <tr>
      <th class="th-sm">ID
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Nombre
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Latitud
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Longitud
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Acciones
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
    </tr>
  </thead>
      @foreach ($stations as $station)
        <tr>
          <td><b>{{$station->id}}</b></td>
          <td>{{$station->name}}</td>
          <td>{{$station->latitude_pos}}</td>
          <td>{{$station->longitude_pos}}</td>

          <td>
            <form action="{{ route('station.destroy', $station->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('station.show',$station->id)}}">Mostrar</a>
              <a class="btn btn-sm btn-warning" href="{{route('station.edit',$station->id)}}">Editar</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>


  </div>
@endsection
