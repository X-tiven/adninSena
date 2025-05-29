@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Area</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Marca</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['number'] }}</td>
                    <td>{{ $computer['brand'] }}</td>
                    
                </tr>
                
            </tbody>
        </table>
        <a href="{{ route('computer.index', $computer['id']) }}" class="btn btn-info btn-sm">Regresar</a>
    </div>
</div>
@endsection
