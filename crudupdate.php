<?php

include("crudconexion.php");
$con=conectar();

$color=$_POST['color'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$precio=$_POST['precio'];
$transmision=$_POST['transmision'];
$imagen=$_POST['imagen'];

$sql="UPDATE formproductos SET  marca='$marca',modelo='$modelo',precio='$precio' ,transmision='$transmision' ,imagen='$imagen'  WHERE color='$color'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crudproducto.php");
    }
?>