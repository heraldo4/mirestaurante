<div class="container">
    <h2 class="my-3 mx-5"><?php echo $titulo ?></h2>

    <div class="table-responsive mb-3">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                   
                </tr>
            </thead>
            <tbody id="datosTablaUsuarios"></tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end">
        <a href="index.php?page=nuevoUsuario" class="btn btn-secondary btn-nuevo"><i class="fas fa-plus"></i> Nuevo</a>
    </div>
</div>

