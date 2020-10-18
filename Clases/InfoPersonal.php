<?php

class InfoPersonal{

    private $id,$familiarContacto,$telefonoContacto,$maquinista,$foto,$id_bombero,$id_especialidad,$id_cargo,$id_curso,$id_salud,$id_grupo_sanguineo;

    function __construct($familiarContacto,$telefonoContacto,$maquinista,$foto,$id_bombero,$id_especialidad,$id_cargo,$id_curso,$id_salud,$id_grupo_sanguineo){
      $this->familiarContacto = $familiarContacto;
      $this->telefonoContacto = $telefonoContacto;
      $this->maquinista = $maquinista;
      $this->foto = $foto;
      $this->id_bombero = $id_bombero;
      $this->id_especialidad = $id_especialidad;
      $this->id_cargo = $id_cargo;
      $this->id_curso = $id_curso;
      $this->id_salud = $id_salud;
      $this->id_grupo_sanguineo = $id_grupo_sanguineo;
    }

    function __set($propiedad,$valor){
      $this->$propiedad = $valor;
    }

    function __get($propiedad){
      return $this->$propiedad;
    }





}




 ?>
