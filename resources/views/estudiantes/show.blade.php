@extends('layouts.app')

@section('content')
<h1>ver alumno</h1>
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre"
             value="{{ $estudiante->nombre }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido"
             value="{{ $estudiante->apellido }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email"
             value="{{ $estudiante->email }}" disabled>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Retornar</a>
        </div>
    </div>
@endsection
