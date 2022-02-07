<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Productos</title>
    <style>
        body{
            margin: auto;
            padding: 50px;
        }
        table, td, th{
            border: 1px solid black;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th{
            height: 70px;
        }
        td{
            height: 30px;
        }
        .button{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

    </style>
</head>
<body>
    <h1 class="text-secondary">{{$cadena}}</h1>
    <table class="table table-bordered table-striped">
        <tr class="text-center bg-secondary text-light">
            <th>Número</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Fecha caducidad</th>
            <th>Categoría de animal</th>
            <th>Precio</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach($productos as $producto=>$detalles)
        <tr class="text-center">
            @foreach($detalles as $indice=>$valor)
                <td>{{$valor}}</td>
            @endforeach
            <td>
                <a href="/productos/ver/{{$i++}}" class="text-succes">Ver</a>
            </td> 
            <td>
                <a href="" class="text-succes">Editar</a>
            </td>  
            <td>
                <a href="" class="text-danger">Eliminar</a>
            </td> 
            
                
        </tr>
        @endforeach
    </table>
    <a href="/productos/crear" class="text-success">Nuevo</a>
</body>
</html>