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


//Usuario
//iformacion a agregar

$color = $_POST["color"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$precio = $_POST["precio"];
$transmision = $_POST["transmision"];

//Consulta en la base de datos

$inser = "INSERT INTO pruebas(id, color, marca, modelo, precio, transmision)
    values ('0', '$color','$marca','$modelo','$precio','$transmision')";

    $ir=mysqli_query($con,$inser);

    if($ir){
        echo "se ha registrado con exito";

    }else{

        echo "hay un error";
    }



    mysqli_close($con)//cerrar base de datos
?>