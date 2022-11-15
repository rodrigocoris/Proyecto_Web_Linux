<?php 
    include("crudconexion.php");
    $con=conectar();

    $sql="SELECT *  FROM formproductos";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Autos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="crudproducto.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="img/Logos/carro-deportivo.png">
    </head>

<!--Barra de navegacion
<header>
    <section class="wrapper">
          <nav>
              <ul>
                    <br>
                  <li><img src = "img/Logos/Logo 2.png" height="50" ></li>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="loginusuario.html">Iniciar Sesion</a></li>
                  <li><a href="formusuario.html">Registrarse</a></li>
                  <li><a href="formproductos.html">Registar Auto</a></li>
                  <li><a href="loginadmin.html">Administrador</a></li>
                  <li><a href="autos.html">Autos en exhibicion</a></li>
                  <li><a href="proveedores.html">Proveedores</a></li>
                  <li><a href="agencia.html">Agencia</a></li>
                  <li><a href="pruebas.html">pruebas</a></li>
              </ul>           
           </nav>
    </section>
</header>----------------------------------------------------------------->


    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                           <a href="loginadmin.html"> <h2>Volver al inicio</h2></a>
                            <h2>Ingresar producto</h2>
                            <br>
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

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table table-dark" >
                                    <tr>
                                        <th>Color</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Precio</th>
                                        <th>Transmision</th>
                                        <th>Imagen</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['color']?></th>
                                                <th><?php  echo $row['marca']?></th>
                                                <th><?php  echo $row['modelo']?></th>
                                                <th><?php  echo $row['precio']?></th>  
                                                <th><?php  echo $row['transmision']?></th>  
                                                <th><?php  echo $row['imagen']?></th>    
                                                <th><a href="crudactualizar.php?id=<?php echo $row['color'] ?>" class="btn btn-success">Editar producto</a></th>
                                                <th><a href="crudeliminar.php?id=<?php echo $row['color'] ?>" class="btn btn-warning">Eliminar producto</a></th>                                        
                                            </tr>
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