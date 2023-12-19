<?php include "header.php" ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


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
                <!-- <th>Cantidad</th> -->
                <th>Total</th>
                <th>Acciones</th>
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
                    <!-- <td id="cantidad-<?php echo $nombreProducto; ?>"><?php echo $cantidadProducto; ?></td> -->
                    <td id="total-<?php echo $nombreProducto; ?>"><?php echo '₡' . number_format(floatval($totalPorProducto), 2); ?></td>
                    <td>
                        <button onclick="aumentarCantidad('<?php echo $nombreProducto; ?>')">+</button>
                        <button onclick="disminuirCantidad('<?php echo $nombreProducto; ?>')">-</button>
                        <button onclick="eliminarProducto('<?php echo $nombreProducto; ?>')">Eliminar</button>
                    </td>
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

<script>
    function aumentarCantidad(nombreProducto) {
        actualizarCantidad(nombreProducto, 1);
    }

    function disminuirCantidad(nombreProducto) {
        actualizarCantidad(nombreProducto, -1);
    }

    function eliminarProducto(nombreProducto) {
        $.ajax({
            type: 'POST',
            url: 'eliminarProducto.php', // Nombre del archivo PHP que maneja la eliminación
            data: { nombreProducto: nombreProducto },
            success: function (response) {
                // Actualizar la vista del carrito después de eliminar el producto
                location.reload();
            },
            error: function (error) {
                console.error('Error al eliminar el producto:', error);
            }
        });
    }

    function actualizarCantidad(nombreProducto, cantidad) {
        $.ajax({
            type: 'POST',
            url: 'actualizarCantidad.php', // Nombre del archivo PHP que maneja la actualización
            data: {
                nombreProducto: nombreProducto,
                cantidad: cantidad
            },
            success: function (response) {
                // Actualizar la vista del carrito después de cambiar la cantidad
                location.reload();
            },
            error: function (error) {
                console.error('Error al actualizar la cantidad:', error);
            }
        });
    }
</script>


</html>
<?php include "footer.php" ?>