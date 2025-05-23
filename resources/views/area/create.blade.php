@extends('layouts.app')
@section('content')
<h1>Bienvenido a Areas</h1>
    <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Name:</label>

        <input type="text" id="title" name="name" placeholder="Nombre del area">
        <br><br>
        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>
        <a href="{{ route('area.index') }}" class="btn btn-primary mb-4 ms-2">Listar Áreas</a>
    </form>
@endsection
