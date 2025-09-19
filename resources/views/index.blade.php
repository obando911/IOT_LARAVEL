@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

{{-- Banner de bienvenida --}}
<div class="text-center mb-4">
  <img src="{{ asset('images/iot_banner.jpg') }}" alt="IoT Projects" class="img-fluid rounded shadow">
  <h1 class="mt-3">Bienvenido a tus Proyectos IoT</h1>
  <p class="text-muted">Gestiona y visualiza tus desarrollos fácilmente</p>
</div>

<div class="row">
  {{-- Proyecto 1 --}}
  <div class="col-md-4 mb-4">
    <div class="card h-100">
      <img src="{{ asset('images/project1.jpg') }}" class="card-img-top" alt="Proyecto 1">
      <div class="card-body">
        <h5 class="card-title">Proyecto Sensor de Temperatura</h5>
        <p class="card-text">Monitorea la temperatura en tiempo real con ESP32 y sensores DHT11.</p>
        <a href="#" class="btn btn-primary">Ver detalles</a>
      </div>
      <div class="card-footer text-muted">
        Creado hace 2 días
      </div>
    </div>
  </div>

  {{-- Proyecto 2 --}}
  <div class="col-md-4 mb-4">
    <div class="card h-100">
      <img src="{{ asset('images/project2.jpg') }}" class="card-img-top" alt="Proyecto 2">
      <div class="card-body">
        <h5 class="card-title">Sistema de Riego Automático</h5>
        <p class="card-text">Usa humedad del suelo para activar una bomba automáticamente.</p>
        <a href="#" class="btn btn-primary">Ver detalles</a>
      </div>
      <div class="card-footer text-muted">
        Creado hace 5 días
      </div>
    </div>
  </div>

  {{-- Puedes agregar más tarjetas aquí --}}
</div>

<div class="row">
  @foreach ($projects as $project)
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        @if($project->image)
          <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->name }}">
        @else
          <img src="{{ asset('images/default_project.jpg') }}" class="card-img-top" alt="Sin imagen">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $project->name }}</h5>
          <p class="card-text">{{ $project->description }}</p>
          <a href="#" class="btn btn-primary">Ver detalles</a>
        </div>
        <div class="card-footer text-muted">
          {{ $project->created_at->diffForHumans() }}
        </div>
      </div>
    </div>
  @endforeach
</div>
