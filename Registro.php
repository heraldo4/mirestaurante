<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Registro.css">
</head>
<body class="bg" style="background-image: url('img/Portada/Portada5.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Registro de Usuarios</h2>
                    </div>
                    <div class="card-body">
                        <form action="procesar_login.php" method="post">
                            <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>

                            <div class="form-group">
                                <label for="contrasena">Contraseña:</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

