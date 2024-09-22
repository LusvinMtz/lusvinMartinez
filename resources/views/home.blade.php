@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                </div>

                <div class="card-body">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">
                        Ver Clientes Potenciales
                    </a>
                    <a href="{{ route('clientes.create') }}" class="btn btn-success">
                        Crear Cliente
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
