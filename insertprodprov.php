<?php
include("crudconexion.php");
$con=conectar();

$color=$_POST['color'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$precio=$_POST['precio'];
$transmision=$_POST['transmision'];
$imagen=$_POST['imagen'];


$sql="INSERT INTO formproductos VALUES('0', '$color','$marca','$modelo','$precio', '$transmision', '$imagen')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: consultprodprov.php");
    
}else {
}
?>