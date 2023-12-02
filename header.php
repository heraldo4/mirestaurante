<?php
$url = basename($_SERVER["PHP_SELF"]);
$url = explode(".", $url);
//var_dump($url[0])
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/<?php echo $url[0] ?>.css">
</head>

<body>
    <!-- contenido de la pagina -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-green">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img class="logo" src="img/logo.png" alt="GreenBite">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-center flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "productos") echo "active" ?>" aria-current="page" href="productos.php">Nuestros productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "acerca") echo "active" ?>" aria-current="page" href="acerca.php">Acerca de Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "servicios") echo "active" ?>" aria-current="page" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "ubicaciones") echo "active" ?>" aria-current="page" href="ubicaciones.php">Nuestras Ubicaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($url[0] == "contactenos") echo "active" ?>" aria-current="page" href="contactenos.php">Contáctenos</a>
                    </ul>
                    <ul class="nav navbar-nav justify-content-center">
                        <form class="d-flex" id="searchForm">
                            <script src="https://kit.fontawesome.com/f360adb569.js" crossorigin="anonymous"></script>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar">
                                <button class="btn btn-buscar btn-busbar" type="button">
                                    <i class="fa-solid fa-magnifying-glass fa-bounce fa-xs"></i>
                                </button>
                            </div>
                            <button class="btn btn-inicio" type="button">Iniciar <i class="fa-solid fa-user fa-xs"></i></button>
                            <button class="btn btn-registrarse" type="button">Registro <i class="fa-solid fa-registered fa-xs"></i></button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>

