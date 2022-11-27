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

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

//Consulta en la base de datos

$inser = "INSERT INTO formproveedores(id, nombre, correo, contrasena)
    values ('0', '$nombre','$correo','$contrasena')";

    $ir=mysqli_query($con,$inser);

    if($ir){
        header("Location: loginproveedores.html");
       

    }else{
        header("Location: loginproveedores.html");
        
    }



    mysqli_close($con)
?>