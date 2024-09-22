@extends('layouts.app')

@section('title', isset($cliente) ? 'Editar Cliente Potencial' : 'Crear Cliente Potencial')

@section('content')
<div class="container">
    <h1>{{ isset($cliente) ? 'Editar Cliente Potencial' : 'Crear Cliente Potencial' }}</h1>
    <form action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}" method="POST">
        @csrf
        @if(isset($cliente))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ isset($cliente) ? $cliente->nombre : old('nombre') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ isset($cliente) ? $cliente->email : old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="cerrado">¿Negocio Cerrado?</label>
            <select name="cerrado" class="form-control" required>
                <option value="1" {{ isset($cliente) && $cliente->cerrado == 1 ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ isset($cliente) && $cliente->cerrado == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">
            {{ isset($cliente) ? 'Actualizar Cliente' : 'Guardar Cliente' }}
        </button>
    </form>
</div>
@endsection
