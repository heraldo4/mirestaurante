// document.addEventListener("DOMContentLoaded", function () {
//     const form = document.querySelector("form");

//     if (form) {
//         form.addEventListener("submit", function (event) {
//             event.preventDefault();

//             // Obtener datos del formulario
//             const nombre = document.getElementById("nombre").value;
//             const email = document.getElementById("email").value;
//             const telefono = document.getElementById("telefono").value;
//             const mensaje = document.getElementById("mensaje").value;

//             // Validar el correo electrónico
//             const emailValido = validateEmail(email);

//             if (!emailValido) {
//                 Swal.fire('¡Error!', 'La dirección de correo electrónico no es válida. Por favor, inténtalo de nuevo.', 'error');
//                 return false;
//             }

//             // Configuración del objeto FormData
//             const formData = new FormData();
//             formData.append("nombre", nombre);
//             formData.append("email", email);
//             formData.append("telefono", telefono);
//             formData.append("mensaje", mensaje);

//             // Realizar la solicitud AJAX (puedes usar Fetch o jQuery.ajax)
//             fetch(src="../procesar_formulario.php", {
//                 method: "POST",
//                 body: formData,
//             })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     Swal.fire('¡Gracias!', 'Tu formulario ha sido enviado correctamente', 'success')
//                 } else {
//                     Swal.fire({
//                         title: 'Error',
//                         text: 'Hubo un problema al enviar el formulario. Detalles del error: ' + data.error,
//                         icon: 'error'
//                     });
//                 }
//             })
//             .catch(error => {
//                 Swal.fire({
//                     title: 'Error',
//                     text: 'Hubo un problema al enviar el formulario. Detalles del error: ' + error,
//                     icon: 'error'
//                 });
//             });

//             return false; // Evita la acción predeterminada del formulario
//         });
//     }

//     // Función para validar el correo electrónico
//     function validateEmail(email) {
//         const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//         return regex.test(email);
//     }
});
