@extends('layouts.app')
@section('content')

<div>
	<div class="d-inline bg-danger">
		@foreach ($alerts as $alert)

			<strong>Título: {{$alert->title}}</strong>
			<ul class="d-inline bg-danger">
	 			<li>Estado: {{$alert->status}} <br></li>
	 			<li>Día de emisión: {{$alert->date}} <br></li>
	 			<li>Hora:{{$alert->hour}} <br></li>
	 			<li>Descripcion: {{$alert->description}} <br></li>
	 			<li>Zonas: @foreach($alert->zones as $zones)
	 							{{$zones}};
	 						@endforeach
	 										</li>
	 			<li>Próxima actualización: {{$alert->update}} <br></li>
			</ul>
		@endforeach
	</div>
</div>
@endsection