function comprobar(){
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let precioH=document.getElementById('precio_hora').value;
  let error=true;
  if(nombre==""){
  
    alert("Error en el nombre");
    error=false;
  }
  if (apellidos=="") {
    
    alert("Error en los Apellidos")
    error=false;
  }
  if (precioH=="") {
  
    alert("Error en el precio hora.");
    error=false;
  }

  if (error==false) {
    return false;
  }
}
