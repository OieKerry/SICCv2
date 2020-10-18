<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistemas de Control de Cuarteles - Cuerpo bomberos de Machalí</title>
</head>
<body>

	<?php require("Top.php") ?>


<?php
    require("Menu.php");
            require "Datos/BomberoDAO.php";

		$bombero = new BomberoDAO();


		?>

    <div class="divFondo">


				<h2 align="center">Capacidad de Recursos de Bomberos</h2>
				<fieldset class="divListado">
					<legend>Primera Compañia</legend>
					<?php

					$bombero->listaCompania("1");

					 ?>
				</fieldset>

				<fieldset class="divListado">
					<legend>Segunda Compañia</legend>
					<?php
				$bombero->listaCompania("2");

					 ?>
				</fieldset>
				<fieldset class="divListado">
					<legend>Tercera Compañia</legend>
					<?php

				$bombero->listaCompania("3");

					 ?>
				</fieldset>
				<button class="btnForm"  onclick="location.href='Listado.php'" >Ver Todo</button>
				<button class="btnForm"  onclick="location.href='Alerta.php'" >Tonos Cuartel</button>
				<br>
				<h4>Disponibles : <?php echo $bombero->totalBomberos()  ?> Bomberos</h4>



    </div>








</body>
</html>
