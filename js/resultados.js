cargarBusqueda();

  
function cargarBusqueda() {
  let nombre = sessionStorage.getItem("txtBuscar")
  //perticion ajax
  let url = `http://localhost/mirestaurante/apirestaurante/src/public/getplatillo/${nombre}`;
  $.ajax({
    type: "get",
    url: url,
    dataType: "JSON",
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility="visible";

    },
    success: function (res) {
      console.log(res);
      if (res.length != 0) {
        crearCartas(res)
      }else{
        document.querySelector("#noResultados").innerHTML=`No hay Resultados para: ${nombre}`
      }

    },
    error: function (xhr) {
      alert("Error al procesar la petición");
      console.log(xhr.statusText + xhr.responseText);
    },
    complete: function () {
  ;
      //document.querySelector(".cargando").style.visibility="hidden";
    }
  });
}


function crearCartas(res) {
    let cartas = "";
    res.forEach(p => {
        cartas +=`<div class='card col-md-6 col-lg-3 mx-auto my-3' style='width: 20rem;'>
        <img src='${p.imagen}' class='card-img-top' alt='${p.nombre}' style='height: 200px; object-fit: cover;'>
        <div class='card-body text-center'>
            <h5 class='card-title'>${p.nombre}</h5>
            <p>Costo: ₡${p.costo}</p>
            <p>Tipo: ${p.tipo}</p>
            <p>Duración: ${p.duracion} minutos</p>
            <button class='btn btn-primary'>Pedir ahora</button>
        </div>
    </div>`;
    });

    document.querySelector("#resultados").innerHTML = cartas;
} 