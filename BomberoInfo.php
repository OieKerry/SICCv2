<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

            <?php
              require("Top.php");
              require("Menu.php");
              include "Datos/ListasDAO.php";
              $listas = new ListasDAO();
              include "Datos/BomberoDAO.php";
              $bomberoDAO = new BomberoDAO();
              include "Clases/Bombero.php";

               ?>
  </head>
  <body>

                    <?php
                      $rut = $_GET["RUN"];

                      $bomberoArray = $bomberoDAO->getBombero($rut);


                    ?>
                    <form class="divFondo" action="modificar.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <h2 align="center">Modificar Bombero  R.U.N. <?php echo $rut ?> </h2>
                    <fieldset class="contPersonal2">
                    <legend>Datos Personales</Legend>
                    <div class="input-info">
                    <label class="info-label">Nombre:</label>
                    <input type="text" name="nombre" value="<?php echo $bomberoArray["nombres"]; ?>" required>
                    </div>
                    <div class="input-info">
                    <label class="info-label">Apellidos:</label>
                    <input type="text" name="apellido" value="<?php echo $bomberoArray["apellidos"]; ?>" required>
                    </div>
                    <div class="input-info">
                    <label class="info-label">Fecha de Nacimiento:</label>
                    <input type="date" name="fechanac" value="<?php echo $bomberoArray["fechaNac"]; ?>" required>
                    </div>
                    <div class="input-info">
                    <label class="info-label">Domicilio:</label>
                    <input type="text" name="domicilio" value="<?php echo $bomberoArray["domicilio"]; ?>" required>
                    </div>
                    <div class="input-info">
                    <label class="info-label">Telefono:</label>
                    <input type="text" name="telefono" pattern="[0-9]+"  value="<?php echo $bomberoArray["telefono"]; ?>" required>
                    </div>
                    <br>
                    <div class="input-info">
                    <label class="info-label">Prevision:</label>
                    <select name="prevision">
                        <?php
                        $listas->listarPrevision($prevision);
                         ?>

                    </select>
                    </div>
                    <div class="input-info">
                    <label class="info-label">Grupo Sanguineo:</label>
                    <select name="grupoSanguineo">
                        <?php
                        $listas->listarGS($bomberoArray["grupoS"]);
                         ?>

                    </select>
                    </div>
                    <div class="input-info">
                      <label class="info-label">Familiar de Contacto:</label>
                      <input type="text"name="familiarContacto" value="<?php echo $bomberoArray["familiarContacto"]; ?>" required>
                    </div>
                    <div class="input-info">
                      <label class="info-label">Telefono de Contacto:</label>
                      <input type="text"name="telefonoContacto" pattern="[0-9]+"  value="<?php echo $bomberoArray["telefonoContacto"]; ?>" required>
                    </div>
                  </fieldset>
                  <fieldset class="contPersonal2">
                    <legend>Datos Bombero</legend>
                    <div class="input-info">
                      <label class="info-label">Compañía:</label>
                      <select name="Compañia">
                        <?php
                        $listas->listarComp($bomberoArray["compania"]);
                         ?>

                      </select>
                    </div>
                    <div class="input-info">
                      <label class="info-label">Cargo:</label>
                      <select name="cargo" size="0">
                        <?php
                        $listas->listarCargos($bomberoArray["cargo"]);
                         ?>

                        </select>
                    </div>
                    <div class="input-info">
                      <label class="info-label">Especialidad:</label>
                      <select name="especialidad">
                        <?php
                                $listas->listarEspecialidades($bomberoArray["especialidad"]); ?>
                      </select>
                    </div>
                    <div class="input-info">
                      <label class="info-label">Curso</label>
                      <select name="curso">
                          <?php
                          $listas->listarCursos($bomberoArray["curso"]);
                           ?>

                      </select>
                    </div>
                        <?php

                        if($bomberoArray["maquinista"] == "si"){
                            echo '
                            <div class="input-info">
                              <label class="info-label">Maquinista</label>
                              <p>Si</p>
                              <input type="radio" name="maquinista" value="si" checked>
                              <p>No</p>
                              <input type="radio" name="maquinista" value="no">
                            </div>';}
                            else{
                              echo '
                              <div class="input-info">
                                <label class="info-label">Maquinista</label>
                                <p>Si</p>
                                <input type="radio" name="maquinista" value="si">
                                <p>No</p>
                                <input type="radio" name="maquinista" value="no" checked>
                              </div>';
                            }
                         ?>
                              <input type="hidden" name="imagen" value="<?php echo $bomberoArray["fotografia"]; ?>" >
                              <input type="hidden" name="rut" value="<?php echo $rut ?>" >
                              Fotografía  <input type="file" name="archivoImagen" id="archivoInput" accept="image/x-png,image/jpeg" onchange="return validaEXT()" >
                              <div id="visorArchivo">
                              <img src="<?php echo $bomberoArray["fotografia"]; ?>"  width="140" height="160" alt="">
                              </div>
                              <div class="contBotones">
                                <input type="submit" class="buttonI" name="btnModificar" value="Modificar"> <input type="submit" class="buttonI"  onclick="window.location.href=\'Listado.php\'" name="btnVolver" value="Volver">
                              </div>
                              <br>
                              <script type="text/javascript">
                                function validaEXT(){
                                  var archivoInput = document.getElementById("archivoInput");
                                  var archivoRuta = archivoInput.value;
                                  var extPermitidas = /(.png|.jpg|.jpeg)$/i;
                                  if(!extPermitidas.exec(archivoRuta)){
                                          imagenNoPermitida();
                                    archivoInput.value="";
                                    return false;
                                  }else{
                                    if(archivoInput.files && archivoInput.files[0]){
                                      var visor = new FileReader();
                                      visor.onload=function(e){
                                        document.getElementById('visorArchivo').innerHTML=
                                        '<embed src="'+e.target.result+'" width="140" height="160">  ';
                                      };
                                      visor.readAsDataURL(archivoInput.files[0]);
                                    }
                                  }
                                }
                              </script>
                            </fieldset>




  </body>
</html>
