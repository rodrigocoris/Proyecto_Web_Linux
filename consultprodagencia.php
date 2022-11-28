<?php
include("crudconexion.php");
$con = conectar();

$sql = "SELECT *  FROM formusuario";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Autos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- <link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css" />-->
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
                <a href="loginagencia.html">
                    
                    <a href="loginagencia.html" class="btn btn-light">Volver al inicio</a>
                    <a href="consultusuarioagencia.php" class="btn btn-light">Ver clientes</a>
                    <br>
                  
                </a>
                  
         

                
<!-- Metodo de buscar-->
           

</div>
</div>     

</div>
</div>


</div>

               
    </div>                





            <?php
if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
?>

<div class="container mt-50">
<div class="col-12">

<form method="POST" action="consultprodagencia.php">
<div class="mb-3">
    <br>
<label class="form-label"><h1>Buscar Producto</h1></label>
<input type="text" class="form-control" placeholder="Buscar Producto" id="buscar" name="buscar">
</div>
<button type="text" class="btn btn-primary">Buscar</button>
</form>


<div class="card col-12 mt-5">
<div class="card-body">
<!-- recuerda que si no te funciona con mysql_query tienes que cambiarlo por mysqli_query -->
<?php $busqueda=mysqli_query($con,"SELECT * FROM formusuario WHERE id LIKE LOWER('%".$_POST["buscar"]."%') OR nombre LIKE LOWER('%".$_POST["buscar"]."%')  OR correo LIKE LOWER('%".$_POST["buscar"]."%')  OR telefono LIKE LOWER('%".$_POST["buscar"]."%') OR sexo LIKE LOWER('%".$_POST["buscar"]."%') "); 
$numero = mysqli_num_rows($busqueda); ?>
<h4 class="card-tittle">Productos  (<?php echo $numero; ?>)</h4>
<br>
<?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?>
<p class="card-tittle">Id: <?php echo $resultado["id"]; ?><br>Nombre: <?php echo $resultado["nombre"]; ?><br>Correo: <?php echo $resultado["correo"]; ?><br>Telefono: <?php echo $resultado["telefono"]; ?><br>Sexo: <?php echo $resultado["sexo"]; ?></p>
<?php } ?>
        

</body>

</html>