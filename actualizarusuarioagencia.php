<?php
include("crudconexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM formusuario WHERE id='$id'";
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
        <form action="updateusuarioagencia.php" method="POST">
            
           
        
            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
            <h2>Nombre:</h2>
            <input type="text" class="form-control-sm" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
            <h2>Correo:</h2>
            <input type="text" class="form-control-sm" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
            <h2>Telefono:</h2>
            <input type="text" class="form-control-sm" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
            <h2>Sexo:</h2>
            <input type="text" class="form-control-sm" name="sexo" placeholder="sexo" value="<?php echo $row['sexo']  ?>">
            <input type="submit" class="btn btn-info btn-lg" value="Actualizar cliente">
        </form>

    </div>
</body>

</html>