<div class="container">
    <h2 class="my-3 mx-5"><?php echo $titulo ?></h2>

    <div class="table-responsive mb-3">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Duración</th>
                </tr>
            </thead>
            <tbody id="datosTabla"></tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end">
       <a href="index.php?page=nuevoProducto" class="btn btn-secondary btn-nuevo"><i class="fas fa-plus"></i> Nuevo</a>
    </div>
</div>