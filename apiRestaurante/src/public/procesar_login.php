<?php
session_start();
include 'conexion.php';

$db = conectar();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar_login = $db->Execute("SELECT * FROM tusuarios WHERE usuario = '$usuario' AND contrasena='$contrasena'");

if ($validar_login->RecordCount() > 0) {
    $usuarioData = $validar_login->FetchRow(); 

    $_SESSION['usuario'] = $usuarioData['usuario'];
    $_SESSION['rol'] = strtolower($usuarioData['rol']); 

    if ($_SESSION['rol'] == 'admin') {
        $is_admin = true;
        header("location:/mirestaurante/index.php");
    } elseif ($_SESSION['rol'] == 'cliente') {
        header("location:/mirestaurante/index.php");
    } else {
        echo "Rol desconocido";
        exit;
    }
} else {
    echo '
    <script>
    alert("Error: usuario o contraseña incorrectos. Intenta de nuevo."); 
    window.location.href = "/mirestaurante/InicioSesion.php";
    </script>
    ';
    exit;
}
?>