<?php

require_once("repositorio.php");
require_once("repositorioUsuariosSQL.php");

class RepositorioSQL extends Repositorio {

  protected $conexion;

  public function __construct() {

    $dsn = "mysql:host=localhost;dbname=reglog;
    charset=utf8mb4;port:3306";
    $usuario = "root";
    $password = "root";

    try {
      $this->conexion = new PDO($dsn, $usuario, $password);
    } catch (Exception $e) {

    }

    $this->repositorioUsuarios = new RepositorioUsuariosSQL($this->conexion);
  }
}

?>
