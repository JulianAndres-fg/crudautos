@extends('layouts.home')
@section('tittle','Lista - Autos')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('update'))
    <div class="alert alert-secondary" role="alert">
        {{ session('update') }}
    </div>
@endif
    <div class="container mt-5">
        <table class="table table-hover">
            <thead class="table-dark text-light">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Kilometraje</th>
                  <th scope="col">Modelo</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Autos as $Auto)
                <tr>
                  <th scope="row">{{$Auto->id}}</th>
                  <td>{{$Auto->Nombre}}</td>
                  <td>{{$Auto->Marca}}</td>
                  <td>{{$Auto->kilometraje}} km</td>
                  <td>{{$Auto->Modelo}}</td>
                  <td>${{$Auto->Precio}}</td>
                  <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#update{{$Auto->id}}">
                        Editar
                      </button>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete{{$Auto->id}}">
                        Eliminar
                      </button>
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show{{$Auto->id}}">
                        Ver
                      </button>
                  </td>
                </tr>
                @include('Autos.info')
                @endforeach
              </tbody>
          </table>
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#create">
            Nuevo Auto
          </button>
          @include('Autos.create')
    </div>
@endsection