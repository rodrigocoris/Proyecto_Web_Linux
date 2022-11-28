<?php

include("crudconexion.php");
$con = conectar();

$id = $_POST['id'];
$color = $_POST['nombre'];
$marca = $_POST['correo'];
$modelo = $_POST['telefono'];
$precio = $_POST['sexo'];


$sql = "UPDATE formusuario SET nombre='$nombre', correo='$correo',telefono='$telefono',sexo='$sexo'  WHERE id = '$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: consultusuarioagencia.php");
}
