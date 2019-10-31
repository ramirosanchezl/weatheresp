@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Nuevo Usuario</h3>
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

    <form action="{{route('users.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-sm-4">
          <strong>Nombre:</strong>
          <input type="text" name="name" class="form-control" placeholder="">
        </div>
        <div class="col-sm-4">
          <strong>Email:</strong>
          <input type="text" name="email" class="form-control" placeholder="">
        </div>
        <div class="col-sm-4">
          <strong>Contraseña:</strong>
          <input type="password" name="password" class="form-control" placeholder="">
        </div>
        <div class="col-sm-4">
          <strong>Tipo:</strong>
          <div class="form-group">
            <select name="type" class="form-control">
                <option value="admin">Admin</option>
                <option value="default">Default</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <a href="{{route('users.index')}}" class="btn btn-sm btn-success">Volver</a>
          <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
        </div>
      </div>
    </form>

  </div>
@endsection
