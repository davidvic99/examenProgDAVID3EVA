<?php

class Proyecto extends Conexion
{

  private $descripcion;

  function __construct()
  {

  }

   public function listarProyectos()
   {
      $consulta="SELECT * FROM proyecto";
      $resultado=$this->conexion->query($consulta);
      return $resultado;
    }
}

 ?>
