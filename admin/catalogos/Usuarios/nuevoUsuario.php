<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmUsuario" class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">    
    <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="index.php?page=usuario" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>

            <div class="me-auto p-2 bd-highlight ">
                <h2>Catálogo Usuario 
            </div>

        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            <label for="nombre">Nombre</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
            <label for="usuario">Usuario</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
            <label for="contrasena">Contraseña</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="gmail" id="gmail" placeholder="Gmail">
            <label for="gmail">Gmail</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="rol" id="rol" placeholder="Rol">
            <label for="rol">Rol</label>
        </div>

        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen">
            <label for="imagen">Imagen</label>
        </div>

        <div class="mb-3">
            <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </form>