<?php
include 'conexion.php';

$db = conectar();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre_apellidos = $_POST['nombre_apellidos'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$contrasena = hash('sha512', $contrasena);

// Verificación de que el usuario no se repita
$verificar_usuario = $db->Execute("SELECT * FROM tusuarios WHERE usuario = '$usuario'");
if ($verificar_usuario && $verificar_usuario->RecordCount() > 0) {
    echo '
    <script>
    alert("El usuario ya existe. Por favor, elige otro nombre de usuario."); 
    window.location.href = "/mirestaurante//registro.php";
    </script>
    ';
    exit();
} 

// Verificación de que el correo no se repita
$verificar_correo = $db->Execute("SELECT * FROM tusuarios WHERE gmail = '$correo_electronico'");
if ($verificar_correo && $verificar_correo->RecordCount() > 0) {
    echo '
    <script>
    alert("El correo electrónico ya existe. Por favor, elige otro correo electrónico."); 
    window.location.href = "/mirestaurante//registro.php";
    </script>
    ';
    exit();
}

// Inserción de datos
$query = "INSERT INTO tusuarios(nombre, usuario, contrasena, gmail) VALUES('$nombre_apellidos', '$usuario', '$contrasena', '$correo_electronico', '$telefono')";
$ejecutar = $db->Execute($query);

if ($ejecutar) {
    echo '
    <script>
    alert("Usuario registrado correctamente"); 
    window.location.href = "/mirestaurante/index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Inténtalo de nuevo. Usuario no almacenado"); 
    window.location.href = "/mirestaurante/index.php";
    </script>
    ';
}

$db->Close();
?>
