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
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
$contrasena = $_POST["contrasena"];

//Consulta en la base de datos

$inser = "INSERT INTO formusuario(id, nombre, correo, telefono, sexo, contrasena)
    values ('0', '$nombre','$correo','$telefono','$sexo','$contrasena')";

    $ir=mysqli_query($con,$inser);

    if($ir){
        header("Location: loginusuario.html");
        echo "se ha registrado con exito";

    }else{
        header("Location: loguin.html");
        echo "hay un error";
       
    }



    mysqli_close($con)
?>