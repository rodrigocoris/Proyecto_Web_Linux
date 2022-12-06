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
    <link href="consultprodagencia.css" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css" />-->                                                                                                                                                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="img/Logos/carro-deportivo.png">
</head>



<body>
<a href="consultclientagencia.php" class="btn" type="submit" name="registar"><img src="img/Logos/flecha.png"  width="50"><h5><p style="color: white;">Volver </h5> </p></a>

               
                
          <center>
          <a class="btn1" type="submit" name="registar"><h1><p style="color: black;">Consultar Producto</h1> </p></a>
          </center>       



            <?php
if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
?>

<div class="container mt-50">
<div class="col-12">

<form method="POST" action="consultprodagencia.php">
<div class="mb-3">
    <br>
    <label class="form-label"><h1><p style="color: #FFFFFF;">Buscar: </h1></label>
    <br>
    <input type="text" class="form" placeholder="Barra de busqueda" id="buscar" name="buscar">
    <button type="text" class="btn2" type="submit" name="registar" id="registrar"><h5><p style="color: black;">Click aqui para buscar</h5> </p></button>
</div>
</div>
</form>


<div class="card col-12 mt-5">
<div class="card-body">
<!-- recuerda que si no te funciona con mysql_query tienes que cambiarlo por mysqli_query -->
<?php $busqueda=mysqli_query($con,"SELECT * FROM formproductos WHERE id LIKE LOWER('%".$_POST["buscar"]."%') OR color LIKE LOWER('%".$_POST["buscar"]."%')  OR marca LIKE LOWER('%".$_POST["buscar"]."%')  OR modelo LIKE LOWER('%".$_POST["buscar"]."%') OR precio LIKE LOWER('%".$_POST["buscar"]."%') OR transmision LIKE LOWER('%".$_POST["buscar"]."%') OR imagen LIKE LOWER('%".$_POST["buscar"]."%')"); 
$numero = mysqli_num_rows($busqueda); ?>
<h4 class="card-tittle">Productos  (<?php echo $numero; ?>)</h4>
<br>
<?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?>
<p class="card-tittle">Id: <?php echo $resultado["id"]; ?><br>Color: <?php echo $resultado["color"]; ?><br>Marca: <?php echo $resultado["marca"]; ?><br>Modelo: <?php echo $resultado["modelo"]; ?><br>Precio: <?php echo $resultado["precio"]; ?><br>Transmision: <?php echo $resultado["transmision"]; ?><br>Imagen: <?php echo $resultado["imagen"]; ?></p>
<?php } ?>
        

</body>

</html>