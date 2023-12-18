<?php include "header.php" ?>

<main class="container-fluid">
    <h1>Este es tu carrito</h1>
</main>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>

    <h1>Carrito de Compras</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalCarrito = 0;
            $productosEnCarrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];

            foreach ($productosEnCarrito as $producto) {
                $nombreProducto = $producto['nombre'];
                $precioProducto = $producto['precio'];

                // Inicializar $totalPorProducto antes del bucle
                $totalPorProducto = 0;

                // Verificar si el precio del producto es numérico
                if (is_numeric($precioProducto)) {
                    // Calcular el total por producto
                    $totalPorProducto = $precioProducto;

                    // Sumar al total del carrito
                    $totalCarrito += $totalPorProducto;
                }
            ?>
            <tr>
                <td><?php echo $nombreProducto; ?></td>
                <td><?php echo '₡' . number_format(floatval($precioProducto), 2); ?></td>
                <td><?php echo '₡' . number_format(floatval($totalPorProducto), 2); ?></td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="2">Total del Carrito:</td>
                <td><?php echo '₡' . number_format($totalCarrito, 2); ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
<?php include "footer.php" ?>
