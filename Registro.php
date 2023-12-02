<!DOCTYPE html>
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

                            <div class="form-group">
                                <label for="nombre_apellidos">Nombre y Apellidos:</label>
                                <input type="nombre_apellidos" class="form-control" id="nombre_apellidos" name="nombre_apellidos" required>
                            </div>

                            <div class="form-group">
                                <label for="correo electronico">Correo Electronico:</label>
                                <input type="correo electronico" class="form-control" id="correo electronico" name="correo electronico" required>
                            </div>

                            <div class="form-group">
                            <label for="fecha cumpleanos">Fecha de Cumpleanos:</label>  

                                <label for="dia">Día</label>
                                <select id="dia" name="dia" required>
                                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>

                                <label for="mes">Mes</label>
                                <select id="mes" name="mes" required>
                                    <?php
                                    $meses = [
                                        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
                                        'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                                    ];
                                    ?>
                                    <?php foreach ($meses as $key => $mes) : ?>
                                        <option value="<?= $key + 1 ?>"><?= $mes ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <label for="anio">Año</label>
                                <select id="anio" name="anio" required>
                                    <?php for ($i = date('Y'); $i >= 1900; $i--) : ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
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