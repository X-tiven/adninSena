@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Areas</h1>
        
        <a href="{{ route('trainingcenter.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>
           
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Area</th>
                    <th>Location</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($trainingcenter as $trainingcenters)
                    <tr>
                        <td>{{ $trainingcenters['id'] }}</td>
                        <td>{{ $trainingcenters['name'] }}</td>
                        <td>{{ $trainingcenters['location'] }}</td>
                        <td><a href="{{ route('trainingcenter.show', $trainingcenters['id']) }}" class="btn btn-info btn-sm">Ver más</a></td>
                         <td><a href="{{ route('trainingcenter.edit', $trainingcenters->id) }}"class="btn btn-success btn-sm">Editar</a></td>
                        <td>
                        <form action="{{ route('trainingcenter.destroy', $trainingcenters->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection