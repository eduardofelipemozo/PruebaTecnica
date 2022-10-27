<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body style="background-color: black">
    <form  action="{{Route('guardarllanta')}}" method="POST" role="form">
        {{csrf_field()}}
        <center>
        <div style="width: 200px">
            <div class="mb-3">
                <label style="color: white" for="exampleInputEmail1" class="form-label"> Nombre</label>
                <input type="text" name="Nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label style="color: white" for="exampleInputPassword1" class="form-label">Ancho de llanta</label>
                <input type="number" name="Ancho_de_llanta" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label style="color: white"for="exampleInputPassword1" class="form-label">Diametro de rin</label>
                <input type="number" name="Diametro_del_rin" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label style="color: white"for="exampleInputPassword1" class="form-label">Presion max.</label>
                <input type="number" name="Presion_max" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label style="color: white"for="exampleInputPassword1" class="form-label">Fabricante</label>
                <input type="text" name="Fabricante" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label style="color: white"for="exampleInputPassword1" class="form-label">Stock</label>
                <input type="number" name="Stock" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">guardar</button>
            <a href="/" class="btn btn-primary">regresar</a>
        </div>
    </center>
    </form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>