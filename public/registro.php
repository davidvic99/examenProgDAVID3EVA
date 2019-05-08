<?php
require "../src/Conexion.php";
require "../src/Trabajador.php";

$trabajador=new Trabajador();
$error=$trabajador->comprobarCampos($_POST);
if($error){ 
  echo $error;
}else{
  $trabajador->conectar();
  $trabajador->insertarUsuario();
  $idtrabajador=$trabajador->ultimoRegistro();
  $trabajador->insertarEventoProy($idtrabajador,$_POST['proyecto'],$_POST['horas']);

}


?>
<html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  
  </body>
</html>
