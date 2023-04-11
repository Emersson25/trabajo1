<?php

require_once 'Conexion.php';

class Usuario extends Conexion{

  private $accesoBD; //Conexión

  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion();
  }

  public function iniciarSesion($nombreUsuario = ""){
    try{
      $consulta = $this->accesoBD->prepare("CALL spu_usuarios_login(?)");
      $consulta->execute(array($nombreUsuario));
      return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }
// REGISTRO
  public function registrarUsuario($datos = []){
    try{
      //1.-Preparamos la consulta
      $consulta = $this->accesoBD->prepare("CALL spu_usuarios_registrar");
      //2.-Ejecutamos la consulta
      $consulta->execute(
        array(
          $datos["nombreusuario"],
          $datos["claveacceso"],
          $datos["apellidos"],
          $datos["nombres"],
          $datos["nivelacceso"]
        )
      );
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }
  public function eliminarUsuario(){
    try{

    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

  public function listarUsuarios(){
    try{

    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

}