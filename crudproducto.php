<?php
include("crudconexion.php");
$con = conectar();

$sql = "SELECT *  FROM formproductos";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Autos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="crudproducto.css">   
    <!--<link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css" />-->
                                                                                                                                                                              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"><link rel="icon" href="img/Logos/carro-deportivo.png">
</head>



<body>
    
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
            <a href="formproductos.html" class="btn1" type="submit" name="registar"><img src="img/Logos/flecha.png"  width="50"><h5><p style="color: black;">Volver a inicio</h5> </p></a>
                    
               
                    <br>
                </a>
                   <br>
                   <h2><p style="color: white;">Producto</h2> </p> 

                
<!-- Metodo de buscar
    -->              
<!--
                <form action="crudinsertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="color" placeholder="Ingresar color">
                    <input type="text" class="form-control mb-3" name="marca" placeholder="Ingresar  marca">
                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Ingresar  modelo">
                    <input type="text" class="form-control mb-3" name="precio" placeholder="Ingresar  precio">
                    <input type="text" class="form-control mb-3" name="transmision" placeholder="Ingresar  transmision">
                    <input type="text" class="form-control mb-3" name="imagen" placeholder="Ingresar imagen">

                    <input type="submit" class="btn btn-outline-danger btn-lg" value="Registrar poducto">
                </form>
            </div>
 -->
            <div class="col-md-8">
                <table class="table table-hover  ">
                    <thead class="table table-white">
                        <tr>
                        <th><p style="color: red;">Id</th></p>
                        <th><p style="color: red;">Color</th></p>
                        <th><p style="color: red;">Marca</th></p>
                        <th><p style="color: red;">Modelo</th></p>
                        <th><p style="color: red;">Precio</th></p>
                        <th><p style="color: red;">Transmision</th></p>
                        <th><p style="color: red;">Imagen</th></p>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id'] ?></th>
                                <th><?php echo $row['color'] ?></th>
                                <th><?php echo $row['marca'] ?></th>
                                <th><?php echo $row['modelo'] ?></th>
                                <th><?php echo $row['precio'] ?></th>
                                <th><?php echo $row['transmision'] ?></th>
                                <th><?php echo $row['imagen'] ?></th>          
                                <th><a href="crudeliminar.php?id=<?php echo $row['id'] ?>" class="btn3"><h5><p style="color: #D81743  ;">Eliminar Producto</h5> </p></a></th>
                                <th><a href="crudactualizar.php?id=<?php echo $row['id'] ?>" class="btn2"><h5><p style="color:#2AC012  ;">Editar Producto</h5> </p></a></th>
                            </tr>
                            </center>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>