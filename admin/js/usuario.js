cargarTablaUsers();
function cargarTablaUsers(){
    $.ajax({
        type: "get",
        url: `http://localhost/mirestaurante/apirestaurante/src/public/getusuarios`,
        dataType: "JSON",
        beforeSend: function () {
        },
        success: function (res) {
            
            let filas="";
            res.forEach(p => {
                filas+=`
                <tr>
                    <td scope="col">${p.id}</td>
                    <td scope="col">${p.nombre}</td>
                    <td scope="col">${p.username}</td>
                    <td scope="col">${p.email}</td>
                    <td scope="col">${p.password}m</td>
                    <td scope="col">
                        <button class=" me-3 btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                `
            });
            document.querySelector("#datosTablaUsers").innerHTML=filas
        },
        error: function (xhr) {
          alert("Error al procesar la petición");
          console.log(xhr.statusText + xhr.responseText);
        },
        complete: function () {
        }
      });
}