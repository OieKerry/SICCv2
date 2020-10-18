<?php


class RegistroTono{

private $id_rt,$nombre,$fechaHora,$id_carro,$id_compania;

function __construct($id_rt,$fechaHora,$id_carro,$id_compania){
      $this->id_rt = $id_rt;
      $this->fechaHora = $fechaHora;
      $this->id_carro = $id_carro;
      $this->id_compania = $id_compania;
}

public function __set($propiedad,$valor){

  $this->$propiedad = $valor;
}
public function __get($propiedad){
  return $this->$propiedad;
}




}
 ?>
