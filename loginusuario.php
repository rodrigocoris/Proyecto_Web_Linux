<?php

 //encontar la base de datos con los campos de texto
$txtusuario=$_POST['txtusuario'];
$txtpassword=$_POST['txtpassword'];
 
//conectar a la base de datos
$con=mysqli_connect("localhost", "root", "", "formulariosesion");
$consulta="SELECT * FROM formusuario WHERE correo= '$txtusuario' and contrasena='$txtpassword' ";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

//manera 1----------------------------------------------------
//validar con 1 y 0 para saber si encuentra o no la base de datos.
if ($filas>0) {
    header("Location: productos.html");

}
else{
    header("Location: loginusuario.html");

}

//manera 2-----------------------------------------------------
/*segunda manera de enlazar la base de datos

if($rows=mysqli_fetch_array($resultado)){
    Session_start();
    $_SESSION['nombre']=$nombre;
    header("Location index.html");
}else{
    header("Location usuario.html");
}
*/


mysqli_free_result($resultado);
mysqli_close($con);

?>
