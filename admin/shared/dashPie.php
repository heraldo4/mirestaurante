</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f360adb569.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

    <?php

        if ($page == "productos") {
            echo '<script src="js/productos.js"></script>';
        } else if ($page == "crudProductos") {
            echo '<script src="js/crudProductos.js"></script>';
        } else if ($page == "nuevoProducto") {
            echo '<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>';
            echo '<script src="js/nuevoProducto.js"></script>';
        }
        else if ($page == "usuario") {
            echo '<script src="js/usuario.js"></script>';
        } else if ($page == "nuevoUsuario") {
            echo '<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>';
            echo '<script src="js/nuevoUsuario.js"></script>';
        }


    ?>
</body>


</html>