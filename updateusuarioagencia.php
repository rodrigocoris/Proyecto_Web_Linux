<?php

include("crudconexion.php");
$con = conectar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];


$sql = "UPDATE formusuario SET nombre='$nombre', correo='$correo', telefono='$telefono', sexo='$sexo'   WHERE id = '$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: consultusuarioagencia.php");
}
