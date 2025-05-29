@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de computers</h1>

        <a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Number</th>
                    <th>Brand</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($computer as $computers)
                    <tr>
                        <td>{{ $computers['id'] }}</td>
                        <td>{{ $computers['number'] }}</td>
                        <td>{{ $computers['brand'] }}</td>
                        <td><a href="{{ route('computer.show', $computers['id']) }}" class="btn btn-info btn-sm">Ver más</a></td>
                        <td><a href="{{ route('computer.edit', $computers->id) }}"class="btn btn-success btn-sm">Editar</a></td>
                        <td>
                            <form action="{{ route('computer.destroy', $computers->id) }}" method="POST">
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
