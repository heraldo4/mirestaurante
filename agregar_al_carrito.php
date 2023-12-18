<?php
include "header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreProducto = $_POST['nombre'];
    $precioProducto = $_POST['precio'];

    // Agregar el producto al carrito
    agregarAlCarrito($nombreProducto, $precioProducto);

    echo 'Producto agregado al carrito';
} else {
    echo 'Solicitud no válida';
}

include "footer.php";
?>
