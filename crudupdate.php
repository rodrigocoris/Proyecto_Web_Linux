<?php

include("crudconexion.php");
$con = conectar();

$id = $_POST['id'];
$color = $_POST['color'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$transmision = $_POST['transmision'];
$imagen = $_POST['imagen'];

$sql = "UPDATE formproductos SET color='$color', marca='$marca',modelo='$modelo',precio='$precio' ,transmision='$transmision' ,imagen='$imagen'  WHERE id = '$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: crudproducto.php");
}
