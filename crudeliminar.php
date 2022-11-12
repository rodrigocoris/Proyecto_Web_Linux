<?php

include("crudconexion.php");
$con=conectar();

$color=$_GET['id'];

$sql="DELETE FROM formproductos  WHERE color='$color'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crudproducto.php");
    }
?>
