$(document).ready(function () {
    cargarInformacionPersonal();

    function cargarInformacionPersonal() {
        $.ajax({
            type: "get",
            url: "http://localhost/mirestaurante/apirestaurante/src/public/getusuario",  
            dataType: "JSON",
            beforeSend: function () {
                
            },
            success: function (res) {
                $("#nombre").val(res.nombre);
                $("#contrasena").val(res.contrasena);
                $("#gmail").val(res.gmail);
                $("#telefono").val(res.telefono);
            },
            error: function (xhr) {
                console.log("Error al obtener la información del usuario");
                console.log(xhr.statusText + xhr.responseText);
            },
            complete: function () {
                
            }
        });
    }

    $("#actualizarBtn").click(function (e) {
        e.preventDefault();
        actualizarInformacionPersonal();
    });

    function actualizarInformacionPersonal() {
        var formData = {
            nombre: $("#nombre").val(),
            contrasena: $("#contrasena").val(),
            gmail: $("#gmail").val(),
            telefono: $("#telefono").val()
        };

        $.ajax({
            type: "put",
            url: "http://localhost/mirestaurante/apirestaurante/src/public/updusuario",  
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
                
            },
            success: function (res) {
                if (res.success) {
                    alert("Información actualizada correctamente");
                } else {
                    alert("Error al actualizar la información. Inténtalo de nuevo.");
                }
            },
            error: function (xhr) {
                console.log("Error al procesar la petición");
                console.log(xhr.statusText + xhr.responseText);
            },
            complete: function () {
                
            }
        });
    }
});
