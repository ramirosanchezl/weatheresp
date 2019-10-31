@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Editar Usuarios</h3>
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

    <form action="{{route('users.update',$user->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row" width=600px >
        <div class="col-md-12">
          <strong>Nombre:</strong>
          <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="col-md-12">
          <strong>Email:</strong>
          <input type="text" name="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="col-md-12">
          <strong>Tipo:</strong>
          <div class="form-group">
            <select name="type" class="form-control">
                <option value=""></option>
                <option value="admin">Admin</option>
                <option value="default">Default</option>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <a href="{{route('users.index')}}" class="btn btn-sm btn-success">Volver</a>
          <button type="submit"class="btn btn-sm btn-primary">Guardar</button>
        </div>
      </div>
    </form>
  </div>
@endsection
