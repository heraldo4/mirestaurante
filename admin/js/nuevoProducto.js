document.querySelector("#guardar").onclick = () => {
  //alert("clic")
  //añadir parametros
  const datos = $("#frmPelicula").serialize()
  console.log(datos)

  
  //perticion ajax
  $.ajax({
    type: "post",
    url: `http://localhost/mirestaurante/apirestaurante/src/public/insproducto?${datos}`,
    dataType: "JSON",
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility="visible";

    },
    success: function (res) {
      //instrucciones success
      //console.log(res)
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
