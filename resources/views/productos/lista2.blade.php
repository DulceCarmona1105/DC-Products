<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/baaa30bed8.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <style type="text/css" media="screen">
        #overlay{
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 240, 245, 0.281);
        }
    </style>
</head>
<body>
    <section id="app">
        <section class="container-fluid">
            <section class="row bg-info">
                <section class="col-lg-12">
                    <h2 class="text-center text-light display-4">DC Products</h2>
                </section>
            </section>
        </section>
        <section class="container">
            <section class="row mt-3">
                <section class="col-lg-6">
                    <h3 class="text-secondary">{{$cadena}}</h3>
                </section>
            <section class="col-lg-6">
                    <button class="btn btn-secondary float-right" href="/productos/crear">
                        <i class="fas fa-user"></i>&nbsp;&nbsp;Agregar Usuario
                    </button>  
                    
            </section>
        </section>
        <hr class="bg-info">
        <section class="row">
            <section class="col-lg-12">
                <table class="table table-bordered table-striped">
                    <thead>
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
                    </thead>
                    <tbody>
                        @foreach($productos as $producto=>$detalles)
                        <tr class="text-center">
                            @foreach($detalles as $detalle=>$valor)
                            <td>{{$valor}}</td>
                            <td>
                                <a href="/productos/ver/{{$i++}}" class="text-success">
                                    Ver
                                </a>
                            </td>
                            <td>
                                <a href="#" class="text-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="text-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>
</body>
</html>