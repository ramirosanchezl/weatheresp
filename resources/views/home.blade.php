@extends('layouts.app')

@section('content')

<h3>Condiciones actuales</h3>
<div class = "container" >
  <div id="{{$station->forecast_id}}"><script type="text/javascript" async src="{{$station->forecast}}"></script></div>
</div>

<div>
  @foreach ($stations as $st)
  <a class="btn btn-primary" href="/home/{{++$i}}" role="button">{{$st->name}}</a>
  @endforeach
</div>

<iframe width="500" height="450" align="right" src=" {{$station->winds}} " frameborder="0"></iframe>
<div class = "w-25">
	<table id="home" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width= >
  <tbody>
    <tr>
      <th class="th-sm">Nombre Estación
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <td>{{$station->name}}</td>
    </tr>
    <tr>
      <th class="th-sm">Temperatura
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <td>{{$measurements->temperature}} ºC</td>
    </tr>
    <tr>
      <th class="th-sm">Humedad
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <td>{{$measurements->humidity}} %</td>
    </tr>
    <tr>
      <th class="th-sm">Presión Atmosférica
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <td>{{$measurements->pressure}} hPa</td>
    </tr>
    <tr>
      <th class="th-sm">Hora
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <td>{{$measurements->created_at->format('d-m-Y H:i') }}</td>
    </tr>
  </tbody>
  </table>
</div>

<div class = "w-25">
  <h5> Máximos y Mínimos Registrados</h5>
  <table id="home" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width= >
    <tbody>
      <tr>
        <th class="th-sm">Temperatura Mínima
          <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <td>{{$min}} ºC</td>
      </tr>
      <tr>
        <th class="th-sm">Temperatura Máxima
          <i class="fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <td>{{$max}} ºC</td>
      </tr>
  </tbody>
  </table>
</div>




<div class = "container" >
  <h5>Ubicación de la Estación</h5>
      <iframe src=" {{$station->location}} " width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
@endsection

           