<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Respuesta</title>
  </head>
  <body>
    <?php require "Top.php";
          require "Menu.php";
          require "Datos/RegistroTonoDAO.php";

          ?>
    <div class="divFondo">
      <h1>Enviando Alarma <br></h1>
<h2>
      <?php


      $registro = new RegistroTonoDAO();



       $B1 = $_GET["B-1"];
       $B2 = $_GET["B-2"];
       $B3 = $_GET["B-3"];
       $Q1 = $_GET["Q-1"];
       $R1 = $_GET["R-1"];
       $BX1 = $_GET["BX-1"];
       $X1 = $_GET["X-1"];
       $BX2 = $_GET["BX-2"];
       $R2 = $_GET["R-2"];

       if($B1 != "" || $Q1 != "" || $R1 != "" || $BX1 != "" || $X1 != "" ){
         echo " <br>Primera Compañia <br>";
         echo $B1," ",$Q1," ",$R1," ",$BX1," ",$X1;
         if($B1 != ""){
              $registro->registrar(1,1);
         }
         if($Q1 != ""){
            $registro->registrar(2,1);
         }
         if($R1 != ""){
            $registro->registrar(3,1);
         }
         if($BX1 != ""){
            $registro->registrar(4,1);
         }
         if($X1 != ""){
            $registro->registrar(5,1);
         }


       }

       if($B2 != "" || $R2 != "" || $BX2 != ""){
         echo " <br>Segunda Compañia <br>";
         echo $B2," ",$R2," ",$BX2;
         if($B2 != ""){
            $registro->registrar(6,2);
         }
         if($R2 != ""){
            $registro->registrar(7,2);
         }
         if($BX2 != ""){
            $registro->registrar(8,2);
         }

       }

       if($B3 != "" ){
         echo " <br>Tercera Compañia <br>";
         echo $B3;
         if($B3 != ""){
            $registro->registrar(9,3);
         }
       }

       // echo "Primera compañia:<br>"$B1,$Q1,$R1,$B2;


    //   if(!isset($_POST['btnRespuesta'])){
    //         header("Location:Central.php");
    //
    //   }
    //
    //
    //
    //   if(!isset($_POST["B-1"]) AND !isset($_POST["B-2"]) AND !isset($_POST["B-3"]) and !isset($_POST["Q-1"]) and !isset($_POST["R-1"]) and !isset($_POST["BX-1"]) and !isset($_POST["X-1"]) and !isset($_POST["BX-2"])
    //     && !isset($_POST["R-2"])){
    //     echo   ' <script languaje="javascript">alert("Debe seleccionar una alerta"); window.location.href="Alerta.php";</script> ' ;
    //
    //   }
    //
    //
    //   if(isset($_POST["tc1"])){
    //
    //     if(isset($_POST["B-1"])){
    //       echo "B-1 compañia 1<br>";
    //     }if(isset($_POST["Q-1"])){
    //     echo "Q-1 compañia 1<br>";
    //   }if(isset($_POST["R-1"])){
    //       echo "R-1 compañia 1<br>";
    //     }if(isset($_POST["BX-1"])){
    //     echo "BX-1 compañia 1<br>";
    //   }if(isset($_POST["X-1"])){
    //     echo "X-1 compañia 1<br>";
    //     }
    // }      if(isset($_POST["tc2"])){
    //
    //         if(isset($_POST["B-2"])){
    //           echo "B-2 compañia 2<br>";
    //
    //           }if(isset($_POST["R-2"])){
    //               echo "R-2 compañia 1<br>";
    //             }if(isset($_POST["BX-2"])){
    //             echo "BX-2 compañia 1<br>";
    //           }
    //     }      if(isset($_POST["tc3"])){
    //
    //             if(isset($_POST["B-3"])){
    //               echo "B-3 compañia 3<br>";
    //             }
    //             }

    ?>

</h2>


  <input type="button" onclick="window.location.href='Alerta.php'" class="btnFormAlerta" value="volver">

    </div>

  </body>
</html>
