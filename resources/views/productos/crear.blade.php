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
    <h2 class="modal-title">Agregar producto</h2> 
    <form action="productos/crear" method="post" type="multipart/form-data">
        @csrf
        <section class="form-group">
            <input type="text" name="nombre" class="form-control form-control-lg" placeholder="Nombre">
        </section>
        <section class="form-group">
            <input type="text" name="cantidad" class="form-control form-control-lg" placeholder="Cantidad">
        </section>
        <section class="form-group">
            <input type="text" name="fechac" class="form-control form-control-lg" placeholder="Fecha -> dd/mm/aaaa">
        </section>
        <section class="form-group">
            <input type="text" name="categoria" class="form-control form-control-lg" placeholder="Categoría">
        </section>
        <section class="form-group">
            <input type="text" name="precio" class="form-control form-control-lg" placeholder="Precio">
        </section>
        <section class="form-group">    
            <input type="submit" class="form-control form-control-lg" value="Guardar">
        </section>
    </form>
</body>
</html>