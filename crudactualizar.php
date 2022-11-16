<?php
include("crudconexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM formproductos WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
     <link href="crudproducto.css" rel="stylesheet"> 
    <!--<link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css" />-->
    <title>Actualizar</title>
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
        <form action="crudupdate.php" method="POST">
            
           
        
            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
            <h2>Color:</h2>
            <input type="text" class="form-control-sm" name="color" placeholder="color" value="<?php echo $row['color']  ?>">
            <h2>Marca:</h2>
            <input type="text" class="form-control-sm" name="marca" placeholder="marca" value="<?php echo $row['marca']  ?>">
            <h2>Modelo:</h2>
            <input type="text" class="form-control-sm" name="modelo" placeholder="modelo" value="<?php echo $row['modelo']  ?>">
            <h2>Precio:</h2>
            <input type="text" class="form-control-sm" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
            <h2>Transmision:</h2>
            <input type="text" class="form-control-sm" name="transmision" placeholder="transmision" value="<?php echo $row['transmision']  ?>">
            <h2>Imagen:</h2>
            <input type="text" class="form-control mb-3" name="imagen" placeholder="imagen" value="<?php echo $row['imagen']  ?>">
            <input type="submit" class="btn btn-info btn-lg" value="Actualizar producto">
        </form>

    </div>
</body>

</html>