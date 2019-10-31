@extends('layouts.app')
@section('content')

  <div class="container" width=300px>
    <div class="row">
      <div class="col-md-10">
        <h3>Lista de Usuarios</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('users.create') }}">Crear un nuevo Usuario</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

   <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" max-width: 100px>
  <thead>
    <tr>
      <th class="th-sm">ID
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Nombre
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Email
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Tipo
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Acciones
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
    </tr>
  </thead>
      @foreach ($user as $user)
        <tr>
          <td><b>{{$user->id}}</b></td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->type}}</td>

          <td>
            <form action="{{ route('users.destroy', $user->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('users.show',$user->id)}}">Mostrar</a>
              <a class="btn btn-sm btn-warning" href="{{route('users.edit',$user->id)}}">Editar</a>
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
