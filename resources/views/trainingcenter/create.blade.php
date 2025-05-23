@extends('layouts.app')
@section('content')
<h1>Bienvenido a Training centers</h1>
    <form action="{{route('trainingcenter.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
       
            <label for="title">Name:</label>

            <input type="text" id="title" name="name" placeholder="Nombre del centro"><br>

             <label for="title">Location:</label>

            <input type="text" id="title" name="location" placeholder="Ubicacion del centro">

            <br>

         
        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>
        <a href="{{ route('trainingcenter.index') }}" class="btn btn-primary mb-4 ms-2">Listar Áreas</a>
    </form>
    
</body>
</html>
@endsection