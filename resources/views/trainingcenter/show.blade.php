@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Area</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicacion</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $trainingcenter['id'] }}</td>
                    <td>{{ $trainingcenter['name'] }}</td>
                    <td>{{ $trainingcenter['location'] }}</td>
                    
                </tr>
                
            </tbody>
        </table>
        <a href="{{ route('trainingcenter.index', $trainingcenter['id']) }}" class="btn btn-info btn-sm">Regresar</a>
    </div>
</div>
@endsection
