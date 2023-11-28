<?php include "header.php" ?>

<main class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="text-primary">Bienvenido a GreenBite: Comida Saludable y Deliciosa</h2>
            <p>Servimos deliciosos platos para llevar o entrega a domicilio.</p>
        </div>
        <div id="demo" class="carousel slide mx-auto" data-bs-ride="carousel" style="border: 3px solid #3f6766; border-radius: 15px; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); height: 600px; max-width: 1500px; margin: auto;">
            <!-- Indicadores/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Portada/Portada1.jpg" alt="Los Angeles" class="d-block w-100" style="object-fit: cover; height: 100%;">
                </div>
                <div class="carousel-item">
                    <img src="img/Portada/Portada2.jpg" alt="Chicago" class="d-block w-100" style="object-fit: cover; height: 100%;">
                </div>
                <div class="carousel-item">
                    <img src="img/Portada/Portada3.jpg" alt="New York" class="d-block w-100" style="object-fit: cover; height: 100%;">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <div class="col-md-12 text-center mt-3">
            <button class="btn btn-primary boton-ver-menu" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">Ver Menú</button>
        </div>
    </div>
</main>


<?php include "footer.php" ?>
