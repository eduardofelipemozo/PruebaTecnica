<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body>
   
   
    
    <center>
        <h1>llantera Mozo</h1>
        <a href="nuevallanta" class="btn btn-primary">CREAR
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
            </svg>
        </a>
    <table class="table" style="width:50%">
        <thead class="table-dark">
            <tr>
                <th>
                    <center> id </center>
                 </th>
                <th>
                   <center> Nombre </center>
                </th>
                <th>
                    <center>Fabricante</center>
                </th>
                <th>
                   <center> Acciones</center>
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach ($llantas as $llanta)
            <tr>
            <td><center>{{ $llanta->id }}</center></td>
            <td><center>{{ $llanta->Nombre }}</center></td>
            <td><center>{{ $llanta->Fabricante }}</center></td>
            <td>
                <center>
                    <a href="{{route('modificar',['id'=>$llanta->id ])}}">
                        <button>editar</button>
                    </a>
                    <a href="{{route('eliminar',['id'=>$llanta->id ])}}">
                        <button>borrar</button>
                    </a>
                </center>
            </td>
        </tr>
          @endforeach
        </tbody>
    </table>
</center>
</body>
</html>