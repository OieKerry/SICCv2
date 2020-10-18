<?php

	include 'conexion.php';

class RegistroTonoDAO{

    function __construct(){}

  function registrar($registroTono,$cuartel){
      $db = conectar();
      $consulta = "insert into tbl_registro_tono(id_carro,id_cuartel) values('".$registroTono."','".$cuartel."') ";
      $stm = $db->prepare($consulta);
      if($stm->execute()){
        return 1;
      }
      return 0;
  }

}









 ?>
