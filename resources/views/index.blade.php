@extends('layouts.web')

@section('content')
    
<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Plataforma de cursos</h1>
    <h2 class="text-xl text-gray-600">Aprendiendo con Livewire y Laravel 8</h2>
    <h3 class="text-lg text-gray-600">El 70% de los graduados duplican sus ingresos</h3>
</div>

<livewire:course-list>

@endsection

