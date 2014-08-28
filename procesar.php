<?php

$fecha=date("d-m-y");
$hora=date("H:i:s");
$destino="ingrid.cespedes.alfaro@gmail.com";
$asunto="comentario";
$desde='From:' .$_POST[email];
$comentario="
/n
Nombre: $_POST[nombre]/n
Email: $_POST[email]/n
Consulta: $_POST[texto]/n
Enviado: $fecha a las $hora/n
";
 mail($destino,$asunto, $comentario, $desde);
?>