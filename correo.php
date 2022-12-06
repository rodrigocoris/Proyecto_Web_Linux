<?php
$para      = 'ramoslozanorodrigoalejandro@gmail.com';
$asunto    = 'Pedido realizado con exito numero de registro: #216';
$descripcion   = 'Gracias por tu compra, Legendary motorsport agradece su preferencia, dentro de dos dias
habiles te llegara otro correo con toda la informacion de tu compra! que tengas un excelente dia ';
$de = 'From: a21110135@ceti.mx';

if (mail($para, $asunto, $descripcion, $de))
   {
    header("Location: index.html");
echo "Correo enviado satisfactoriamente";
}else{
    
    echo "algo salio mal, intentalo de nuevo";
}
?>