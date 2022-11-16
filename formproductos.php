<?php 

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="formulariosesion";


$con =mysqli_connect($db_host, $db_user, $db_password,$db_name);

if(!$con){
    die("Error " . mysqli_connect_error());
}else{
    echo "conectado..";
}

$color = $_POST["color"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$precio = $_POST["precio"];
$transmision = $_POST["transmision"];
$imagen = $_POST["imagen"];

//Consulta en la base de datos

$inser = "INSERT INTO formproductos(id, color, marca, modelo, precio, transmision, imagen)
    values ('0', '$color','$marca','$modelo','$precio','$transmision' ,'$imagen')";

    $ir=mysqli_query($con,$inser);

    if($ir){
        header("Location: crudproducto.php");
        echo "se ha registrado con exito";

    }else{
        header("Location: productos.html");
        echo "hay un error";
    }

    mysqli_close($con)//cerrar base de datos
?>