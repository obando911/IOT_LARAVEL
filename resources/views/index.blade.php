@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

{{-- Banner de bienvenida --}}
<div class="text-center mb-4">
  <img src="{{ asset('img/iot_banner.jpg') }}" alt="IoT Projects" class="img-fluid rounded shadow">
  <h1 class="mt-3">Bienvenido a tus Proyectos IoT</h1>
  <p class="text-muted">Gestiona y visualiza tus desarrollos fácilmente</p>
</div>

@endsection
