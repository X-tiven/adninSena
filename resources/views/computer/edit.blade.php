@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Categoría</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="number" class="form-label">Numero del Computer</label>
                        <input type="number"name="number"id="number"value="{{ old('number', $computer->number) }}">
                        
                        <label for="brand" class="form-label">Marca del Computer</label>
                        <input type="text"name="brand"id="brand"value="{{ old('brand', $computer->brand) }}">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Categoría
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection