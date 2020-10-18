<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php require("Top.php");
    include 'qrcode.html';
                        require "Datos/BomberoDAO.php";
                        $bombero = new BomberoDAO(); ?>


    <body>


      <h2 class="textoCompania">Bomberos Primera Compañía  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Disponibles : <?php echo $bombero->totalBomberosCompania("1")  ?> Bomberos</h3>
            <div class="divFondoTablas">
          <?php


                      $bombero->bomberosActivos("1");



      ?>

    </div>

  </body>
</html>
