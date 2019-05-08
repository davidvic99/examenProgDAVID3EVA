<?php

class Conexion
{
  private $server="127.0.0.1";
  private $db="proyectos";
  private $user="root"; 
  private $pass="";
  public $conexion=null;

  function __construct()
  {
  }
  public function config($server,$db,$user,$pass){
    $this->server=$server;
    $this->db=$db;
    $this->user=$user;
    $this->pass=$pass;
  }
  public function conectar(){
    $this->conexion = new mysqli($this->server, $this->user, $this->pass, $this->db);
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
}

?>
