if(sessionStorage.getItem("id")!=null){
    var id=parseInt(sessionStorage.getItem("id"));
    document.querySelector("#id").value=sessionStorage.getItem("id");
    document.querySelector("#nombre").value=sessionStorage.getItem("nombre");
    document.querySelector("#username").value=sessionStorage.getItem("username");
    document.querySelector("#email").value=sessionStorage.getItem("email");
    document.querySelector("#password").value=sessionStorage.getItem("password");
    sessionStorage.clear()
  }else{
    id=-1
  }
  
  document.querySelector("#guardar").onclick = () => {
    //añadir parametros
    const datos = $("#frmUsuario").serialize()
    const accion=(id==-1) ? "insusuario" :"updusuario"
    const peticion=(id==-1) ? "post" :"put"
    peticionGuardar(accion,peticion,datos)
  }
  
  function peticionGuardar(accion,peticion,datos) {
    //perticion ajax
    url= `http://localhost/mirestaurante/apirestaurante/src/public/${accion}?${datos}`;
    console.log(url)
    $.ajax({
      type: peticion,
      url: url,
      dataType: "JSON",
      beforeSend: function () {
        //document.querySelector(".cargando").style.visibility="visible";
  
      },
      success: function (res) {
        //instrucciones success
        Swal.fire({
          title: "Mensaje",
          text: "¡Datos Guardados Correctamente!",
          icon: "success"
        });
      },
      error: function (xhr) {
        alert("Error al procesar la petición");
        console.log(xhr.statusText + xhr.responseText);
      },
      complete: function () {
        //document.querySelector(".cargando").style.visibility="hidden";
      }
    });
  }
  