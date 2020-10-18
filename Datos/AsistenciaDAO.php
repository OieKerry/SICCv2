<?php

	include 'conexion.php';
	include '../Clases/Bombero.php';

	class AsistenciaDAO{

	}
	// if(verificarRegistro($id_bombero)){
	// $id_registro = comsultarUltimoID($id_bombero);
	// if(comsultarHoraSalida($id_bombero) != ""){
	// 			echo 1;
	// 			asistenciaBombero($rut_bombero,$id_bombero);
	// 		}else{
	// 			echo 2;
	// 			updateHoraSalida($id_registro);
	// 		}
	// 	}else{
	// 		echo 1;
	// 		asistenciaBombero($rut_bombero,$id_bombero);
	// 	}

			if(isset($_REQUEST['rut'])){
				//echo $_REQUEST['rut'];

				$rut_bombero = $_REQUEST['rut'];
				$id_bombero = getID($rut_bombero);
				if(verificarRegistro($id_bombero) != 0){
					if(comsultarHoraSalida($id_bombero) != ""){
								echo 1;
								asistenciaBombero($rut_bombero,$id_bombero);
							}
					else{
							$id_registro = comsultarUltimoID($id_bombero);
							updateHoraSalida($id_registro);
							echo 2 ;
					}
				}else{
							echo 1;
							asistenciaBombero($rut_bombero,$id_bombero);
				}

			}else{
				echo "Error recibir el rut del bombero. ";
			}

		function __construct(){

		}

		//! MARCA ASISTENCIA - ENTRADA

		function asistenciaBombero($rut_bombero,$getid){
			$db = conectar();
			if( getID($rut_bombero) != 0 ){
				$consulta_2 = "insert into tbl_registro_bombero (id_bombero,estado) VALUES ('".$getid."',1) ";
				$stm = $db->prepare($consulta_2);

				if($stm->execute()){
					//! AQUÍ VA EL MENSAJE

					return 1;
				}else{

					return 2;
				}
			}else{

			}
		}

		function getID($run){
			$db = conectar();
			try {
			  $stmt = $db->prepare("SELECT id_bombero FROM tbl_bombero where run =  '".$run."' " );
			  $stmt->execute();
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

			  foreach ($rows as $row) {
				$id = $row["id_bombero"];
				return $id;
			  }

			} catch (PDOException $e) {
				echo "Error ".$e;
			  }
			  return 0;
		  }

		function verificarRegistro($id){
			$db = conectar();
			$stmt = $db->prepare("select id_registro as registro from tbl_registro_bombero where id_bombero = '".$id."' ");
			$stmt->execute();
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rows as $row) {
					return 1;
			}
			 return 0;
		}


		function comsultarUltimoID($id){
			$db = conectar();
			try {
			  $stmt = $db->prepare("SELECT MAX(`id_registro`) as ultimoID FROM `tbl_registro_bombero` WHERE `id_bombero` = '".$id."' " );
			  $stmt->execute();
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

			  foreach ($rows as $row) {
				$lastId = $row["ultimoID"];
				return $lastId;
			  }

			} catch (PDOException $e) {
				echo "Error ".$e;
			  }
			  return 0;
		  }

		function comsultarHoraSalida($ide){
			$db = conectar();
			$aidi = comsultarUltimoID($ide);
			try {
			  $stmt = $db->prepare("SELECT h_salida FROM `tbl_registro_bombero` WHERE id_registro  = '".$aidi."' " );
			  $stmt->execute();
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

			  foreach ($rows as $row) {
				$hora = $row["h_salida"];
				return $hora;
			  }

			} catch (PDOException $e) {
				  "Error ".$e;
			  }
			  return 0;
		  }


		  //! MARCA ASISTENCIA - SALIDA

		  function updateHoraSalida($ide){

			$db = conectar();
			try{
			//$consulta = "update tbl_registro_bombero SET h_salida = CURRENT_TIMESTAMP WHERE id_registro = '".$ide."' ";
			$consulta = "update tbl_registro_bombero SET h_salida = CURRENT_TIMESTAMP, estado = 0 WHERE id_registro = '".$ide."' ";
				$stm = $db->prepare($consulta); //Prepara la $consulta
				if($stm->execute()){
					//! AQUÍ VA EL MENSAJE

					return 1;
				}else{

					return 2;
				}
				}catch(PDOException $e){


				}
			}



	/*
	if(isset($_REQUEST['rut'])){
		echo $_REQUEST['rut'];
		$consulta = "INSERT INTO tbl_bombero (id_bombero) VALUES ('1')";
		$db = conectar();   //realiza la Conexion

		$stm = $db->prepare($consulta);
		if($stm->execute()){
			echo   ' <script languaje="javascript">alert("SE HA REGISTRADO LA ENTRADA");</script>  ' ;
			return 1;
		}else{
			echo "Error recibir el rut del bombero. ";
			return 2;
		}
	}

	/*

	function ingresarRegistro($rut_bombero){
		$rut_bombero = $_REQUEST['rut'];
	}

	$devuelve_id = "SELECT id_bombero FROM tbl_bombero WHERE run= ($rut_bombero)";

	$consulta = "INSERT INTO tbl_bombero (id_bombero) VALUES ('1')";


	function ingresarBombero($bombero){
		$rut = $bombero->__get("run");
		if(){
			echo "Se puede ingresar ";
			$consulta = "insert into tbl_registro_bombero(id_bombero) values('1')";
			$db = conectar();   //realiza la Conexion

			$stm = $db->prepare($consulta); //Prepara la $consulta
			if($stm->execute()){
				return 1; // positivo
			}else{
			    return 2; // negativo
			}

		}else{
			echo   ' <script languaje="javascript">alert("Ya se encuentra guardado");</script>  ' ;
		return 3;
		}
	}
	*/



?>
