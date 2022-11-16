<?php

include("crudconexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM formproductos  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crudproducto.php");
    }
?>
