@extends('layouts.app')

@section('content')

<h3>Datos de usuario</h3>
<div class = "container">
	<ul class="list-group">
	
		<li class="list-group-item">Nombre: {{$name}}</li>

		<li class="list-group-item">ID: {{$id}}</li>

		<li class="list-group-item">Email: {{$email}}</li>
	</ul>
</div>


@endsection
