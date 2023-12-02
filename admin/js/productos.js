cargarTabla();

function cargarTabla(){
    
    $.ajax({
        type: "get",
        url: `http://localhost/mirestaurante/apirestaurante/src/public/getproductos`,
        dataType: "JSON",
        beforeSend: function () {
          //document.querySelector(".cargando").style.visibility="visible";
    
        },
        success: function (res) {
            
            let filas="";
            res.forEach(p => {
                filas+=`
                <tr>
                    <td scope="col">${p.id}</td>
                    <td scope="col">${p.nombre}</td>
                    <td scope="col">${p.costo}</td>
                    <td scope="col">${p.tipo}</td>
                    <td scope="col">${p.duracion}m</td>
                    <td scope="col">
                        <button class=" me-3 btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                
                `
            });
            document.querySelector("#datosTabla").innerHTML=filas
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