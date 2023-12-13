<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    // Dirección de correo electrónico a la que se enviará el formulario
    $destinatario = "heraldlc04@gmail.com";  // Reemplaza esto con tu dirección de correo electrónico

    // Asunto del correo electrónico
    $asunto = "Nuevo formulario de contacto desde el sitio web";

    // Cuerpo del correo electrónico
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Encabezados del correo electrónico
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        // Mostrar la notificación emergente de SweetAlert
        echo "<script>
                swal('¡Gracias!', 'Tu formulario ha sido enviado correctamente', 'success')
                .then((value) => {
                    window.location.href = 'index.php'; // Puedes redirigir a la página que desees
                });
              </script>";
    } else {
        // En caso de error al enviar el correo electrónico
        echo "<script>
                swal('¡Error!', 'Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo.', 'error');
              </script>";
    }
}
?>
