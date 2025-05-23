@extends('layouts.app')
@section('content')
<h1>Bienvenido a Computers</h1>
    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
       
            <label for="title">Number:</label>

            <input type="number" id="title" name="number" placeholder="Numero del computador"><br>

             <label for="title">Brand:</label>

            <input type="text" id="title" name="brand" placeholder="Marca del computador">

            <br>

         
        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>
        <a href="{{ route('computer.index') }}" class="btn btn-primary mb-4 ms-2">Listar Computers</a>
    </form>
    
@endsection