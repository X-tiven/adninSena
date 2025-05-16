<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
       
            <label for="title">Number:</label>

            <input type="number" id="title" name="number" ><br>

             <label for="title">Brand:</label>

            <input type="text" id="title" name="brand" >

            <br>

         
        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>
    </form>
    
</body>
</html>