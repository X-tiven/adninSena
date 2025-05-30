@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Training Center</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('trainingcenter.update', $trainingcenter->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Training Center</label>
                        <input type="text"name="name" id="name" value="{{ old('name', $trainingcenter->name) }}">
                        <label for="location" class="form-label">Ubicacion del Training Center</label>
                        <input type="text"name="location" id="location" value="{{ old('location', $trainingcenter->location) }}">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Training Center
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
