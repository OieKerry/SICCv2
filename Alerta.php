<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php require("Top.php") ?>


  <?php
      require("Menu.php"); ?>

      <div class="divFondo" >
        				<h2 align="center">Tonos de Alerta a Cuarteles</h2>
                <form method="post" method="post" autocomplete="off" enctype="multipart/form-data">


        <div class="formAlertas">
          <h2 style="text-align:center"> Primera Compañía </h2>
          <br/ >
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad B-1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input name="B-1" value="B-1" type="checkbox" class="largerCheckbox" />
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad Q-1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="Q-1" type="checkbox" value="Q-1"  class="largerCheckbox"/>
        </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" > Unidad R-1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input name="R-1" type="checkbox" value="R-1"  class="largerCheckbox"/>
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad BX-1:&nbsp;</label>
              <input name="BX-1" type="checkbox" value="BX-1"  class="largerCheckbox"/>
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" > Unidad X-1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="X-1" type="checkbox" value="X-1" class="largerCheckbox"/>
          </div>

        </div>

        <div class="formAlertas">
          <h2 style="text-align:center"> Segunda Compañía </h2>
          <br/ >
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad B-2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input name="B-2" type="checkbox" value="B-2"  class="largerCheckbox" />
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad BX-2:&nbsp;</label>
                <input name="BX-2" type="checkbox" value="BX-2" class="largerCheckbox" />
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad R-2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input name="R-2" type="checkbox" value="R-2" class="largerCheckbox" />
          </div><br><br><br><br><br>
        </div>


        <div class="formAlertas">
                  <h2 style="text-align:center"> Tercera Compañía </h2>
                  <br/ >
                  <div class="input-info">
                      <label class="info-label" class="txtAlerta" >Unidad B-3:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input name="B-3"  type="checkbox" value="B-3" class="largerCheckbox" />
                  </div>


                  <br><br><br><br><br>
                </div>


              </form>

                <input type="submit" class="btnForm" value="Volver" onclick="location.href='Central.php'">
                <input type="submit" name="btnRespuesta" onclick="alertaRespuesta();" class="btnForm" value="Tonos Cuartel">
              
    </div>

<script type="text/javascript">
function alertaRespuesta(){

        //obtener los checkbox, si confirma, enviarlos, si los cancela, cambiar los valores a todos los seleccionados a false
        var checkAlertas = document.forms[0];
        var txt = "";
        var i;
        var cont = 0;
        var getText="";
        var setText="";
        for (i = 0; i < checkAlertas.length; i++) {
          if (checkAlertas[i].checked) {
            txt = txt + checkAlertas[i].value + " ";
            setText = checkAlertas[i].value+"="+checkAlertas[i].value;
             if(cont >0){
               getText = getText + "&"+ setText;
             }else{
               getText = setText;
             }
            cont++;
          }
        }
        if(cont !=0){

              Swal.fire({
              title: 'Son estas las alertas que desea?',
              text: txt,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Sí, Enviar Alertas'
            }).then((result) => {
                        if (result.isConfirmed) {

                          setTimeout('location.href="Respuesta.php?'+getText+'"',0);
                        }
                      })
                    }else{
                      Swal.fire({
                        title:'No ha seleccionado ninguna alerta',
                        icon:'error'

                      })
                    }


  }
</script>



  </body>
</html>
