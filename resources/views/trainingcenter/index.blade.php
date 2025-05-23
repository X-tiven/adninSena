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
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($trainingcenters as $trainingcenter)
                    <tr>
                        <td>{{ $trainingcenter['id'] }}</td>
                        <td>{{ $trainingcenter['name'] }}</td>
                        <td>{{ $trainingcenter['location'] }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection