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
    <link href="consultclientagencia.css" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css" />-->                                                                                                                                                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="img/Logos/carro-deportivo.png">
</head>



<body>
    
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
            <a href="loginagencia.html" class="btn" type="submit" name="registar"><img src="img/Logos/flecha.png"  width="50"><h5><p style="color: black;">Volver </h5> </p></a>
            <br>
            <br>
                    <a href="consultusuarioagencia.php" class="btn1" type="submit" name="registar"><h2><p style="color: black;">Clientes</h2> </p></a>
                    <br>
                    <br>
                    <a href="consultprodagencia.php" class="btn1" type="submit" name="registar"><h2><p style="color: black;">Productos</h2> </p></a>      
                    <br>
                  
                </a>
                  
         

                
<!-- Metodo de buscar-->
           <br>
           <br>

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
   
<label class="form-label"><h4><p style="color: #FFFFFF;">Buscar:</h4></label>


<input type="text" class="form" placeholder="Barra de busqueda" id="buscar" name="buscar">

<button type="text" class="btn1" type="submit" name="registar" id="registrar"><h5><p style="color: black ;">Click aqui para buscar</h5> </p></button>
</div>
</form>


<div class="card text-white bg-dark col-12 mt-5  mb-3" style="max-width: 180rem;">
<div class="card-body">
<!-- recuerda que si no te funciona con mysql_query tienes que cambiarlo por mysqli_query -->
<?php $busqueda=mysqli_query($con,"SELECT * FROM formusuario WHERE id LIKE LOWER('%".$_POST["buscar"]."%') OR nombre LIKE LOWER('%".$_POST["buscar"]."%')  OR correo LIKE LOWER('%".$_POST["buscar"]."%')  OR telefono LIKE LOWER('%".$_POST["buscar"]."%') OR sexo LIKE LOWER('%".$_POST["buscar"]."%') "); 
$numero = mysqli_num_rows($busqueda); ?>
<h2 class="card-tittle">Clientes:   (<?php echo $numero; ?>)</h2>
<br>

<?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?>
<p class="card-tittle">Id: <?php echo $resultado["id"]; ?><br>Nombre: <?php echo $resultado["nombre"]; ?><br>Correo: <?php echo $resultado["correo"]; ?><br>Telefono: <?php echo $resultado["telefono"]; ?><br>Sexo: <?php echo $resultado["sexo"]; ?></p>
<?php } ?>
        

</body>

</html>


