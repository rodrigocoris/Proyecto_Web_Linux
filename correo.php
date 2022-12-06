<?php
$para      = 'ramoslozanorodrigoalejandro@gmail.com';
$asunto    = 'Pedido realizado con exito! Id de seguimiento: #21624156';
$descripcion   = 'Gracias por tu compra, Legendary motorsport agradece su preferencia, dentro de dos dias habiles te llegara otro correo con toda la informacion de tu compra, esperamos que tengas un excelente dia y gracias por ser parte de la familia Legendary Motorsport';
$de = 'From: a21110135@ceti.mx';

if (mail($para, $asunto, $descripcion, $de))
   {
    header("Location: index.html");
    echo "Correo enviado satisfactoriamente";
}else{
    header("Location: index.html");
    echo "algo salio mal, intentalo de nuevo";
}
?>