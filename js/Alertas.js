function alertLimpiar(){
  Swal.fire({
   title:'Bienvenido',

  });
}



function alertaModifcarError(variable){
  Swal.fire({
    title:'Se ha producido un error',
    text: 'Error de tipo '+variable,
    icon:'error'
  });
}

function alertaModificar(variable){
  if(variable != 0){
    Swal.fire({
      title:'Modificaciones Correctas',
      text:'Bombero modificado correctamente',
      icon:'success'
    });
  }else{
    Swal.fire({
      title:'ERROR!',
      text:'ha ocurrido un error al modificar',
      icon:'error'
    })
  }

}
function alertaImagen(){
  Swal.fire({
    title:'Imagen Bombero',
    text:'El bombero ingresado no tiene imagen definida, pero puede ser modificada',
    icon:'question'
  });
}

function imagenNoPermitida(){
  Swal.fire({
    title:'Archivo No Valido',
    text:'El archivo que ingreso no está permitido, verifique que sea una imagen',
    icon:'error'
  });
}

function alertaExistente(){
  Swal.fire({
    title:'Error',
    text:'El Rut que ingresó, ya se encuentra grabado',
    icon:'error',
    showConfirmButton: false,
    timer: 2500
  }).then(function() {
      window.location = "ingreso.php";
  });
}

function alertaIngresar(variable,variable2,variable3){
  //se podria dejar una variable si es que la respuesta es 1 "correcta" o 0 "incorrecta"
  //variable3 se asegura que haya una imagen al ingresar
  if(variable != 0 && variable2 !=0){
    if(variable3 == 0){
    Swal.fire({
      title:'Ingreso Correcto',
      text:'Bombero ingresado correctamente',
      icon:'success'
    });
  }else{
    Swal.fire({
      title:'Ingreso Correcto',
      text:'El bombero ingresado no tiene imagen definida, pero puede ser modificada',
      icon:'info'
    });
  }
  }else{
    Swal.fire({
      title:'Hubo un error',
      text:'El bombero no se pudo ingresar',
      icon:'error'
    })
  }

}
