<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreProducto = $_POST['nombreProducto'];
    $cantidad = $_POST['cantidad'];

    // Buscar el producto en el carrito y actualizar el precio unitario
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as &$producto) {
            if ($producto['nombre'] === $nombreProducto) {
                $producto['precio'] += $cantidad;

                // Asegurarse de que el precio no sea negativo
                if ($producto['precio'] < 0) {
                    $producto['precio'] = 0;
                }

                break;
            }
        }
    }

    // Guardar la sesión actualizada
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);

    echo 'success';
} else {
    echo 'Invalid Request';
}
