@extends('layouts.app')

@section('content')

<div>
  @foreach ($stations as $st)
  <a class="btn btn-primary" href="/historic/{{++$i}}" role="button">{{$st->name}}</a>
  @endforeach
</div>
<h2>Datos Históricos</h2>

<div>
	<table id="historic" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Nombre Estación
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Temperatura
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Humedad
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Presión
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Hora
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
    </tr>
  </thead>
          <tbody>
            @foreach ($measurements as $measurement)
            <tr>
              <td>{{$station->name}}</td>
              <td>{{$measurement->temperature}} ºC</td>
              <td>{{$measurement->humidity}} %</td>
              <td>{{$measurement->pressure}} hPa</td>
              <td>{{$measurement->created_at->format('d-m-Y H:i')}}</td>
            </tr>
            @endforeach
          </tbody>
  </table>

</div>
<script>
    $(document).ready( function () {
      $('#historic').DataTable();
    });
  </script>

@endsection