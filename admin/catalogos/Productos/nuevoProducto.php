<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmProductos" class="w-40 m-auto mx-3 my-3" action="" method="GET" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id">
    <div class="container">
        <div class="p-3 bd-highlight">
            <a href="index.php?page=productos" class="btn btn-secondary btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>

        <div class="container">
            <div>
                <h2>Catálogo Menu</h2>
            </div>

            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
                <label for="nombre">Nombre</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="costo" id="costo" placeholder="costo">
                <label for="costo">Costo</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="tipo">
                <label for="tipo">Tipo</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="duracion" id="duracion" placeholder="duracion">
                <label for="duracion">Duracion</label>
            </div>

            <div class="mb-3">
                <div>
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*">
                    
                </div>
            </div>

            <div class="mb-3">
                <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
                <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
            </div>
        </div>
    
</form>