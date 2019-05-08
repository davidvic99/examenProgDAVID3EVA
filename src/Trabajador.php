<?php

class Trabajador extends Conexion
{

  private $nombre;
  private $apellidos;
  private $precio_hora;


  function __construct()
  {

  }

  public function comprobarCampos($post){
     $error=null;
     if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["precio_hora"])){
       $error="";
     }elseif($post["nombre"]==""){
       $error="Debes rellenar este campo";
     }elseif($post["apellidos"]==""){
       $error="No has introducido el apellido";
     }elseif($post["precio_hora"]==""){
       $error="No has introducido la edad";
     }else{
       $error=false;
       $this->nombre=$post["nombre"];
       $this->apellidos=$post["apellidos"];
       $this->precio_hora=$post["precio_hora"];
    
     }
     return $error;
   }
    public function insertarUsuario()
    {
      $consulta="INSERT INTO trabajador (nombre, apellidos, precio_hora)
      VALUES ('$this->nombre', '$this->apellidos', $this->precio_hora)";
      $this->conexion->query($consulta);
      echo "Registrado correctamente";
    }
    public function ultimoRegistro()
    {
      $consulta="SELECT * FROM trabajador ORDER BY id DESC LIMIT 1";
      $resultado=$this->conexion->query($consulta);
      foreach($resultado as $value){
        $idtrabajador=$value['id'];
      }
      return $idtrabajador;

    }
    public function insertarEventoProy($idtrabajador,$proyecto,$horas)
    {
      $consulta="INSERT INTO trabajador_proyecto (id_trabajador, id_proyecto, horas)
      VALUES ('$idtrabajador', '$proyecto', '$horas')";
      $this->conexion->query($consulta);
    }
}

 ?>
