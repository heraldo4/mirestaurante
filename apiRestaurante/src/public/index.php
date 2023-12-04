<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
require "conexion.php";

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$app = new \Slim\App($config);



//--------crud productos------------//

// Insertar platillo
$app->post('/insplatillo', function (Request $request, Response $response, array $args) {
    $db = conectar();
    $rec = $request->getQueryParams(); 
    $res = $db->AutoExecute("tplatillos", $rec, "INSERT");
    $response->getBody()->write($res);
    return $response;
});

// Modificar platillo
$app->put('/updplatillo', function (Request $request, Response $response, array $args) {
    $db = conectar();
    $rec = $request->getQueryParams();
    $res = $db->AutoExecute("tplatillos", $rec, "UPDATE", "id=$rec[id]");
    $response->getBody()->write($res);
    return $response;
});

// Eliminar platillo
$app->delete('/delplatillo/{id}', function (Request $request, Response $response, array $args) {
    $id = $args["id"];
    $db = conectar();
    $sql = "DELETE FROM tplatillos WHERE id = $id";
    $res = $db->execute($sql);
    $success = ($res !== false);
    $response->getBody()->write(json_encode(['success' => $success]));
    return $response;
});
   

// Consulta para obtener todos los platillos
$app->get('/getplatillo', function (Request $request, Response $response, array $args) {
    $db = conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * FROM tplatillos";
    $res = $db->GetAll($sql);
    $response->getBody()->write(json_encode($res));
    return $response;
});

//consultas obtener info de una pelicula
$app->get('/getplatilloID/{id}', function (Request $request, Response $response, array $args) {
    $id = $args["id"];
    $db = conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * FROM tplatillos WHERE id=$id";
    $res = $db->GetAll($sql);
    $response->getBody()->write(json_encode($res));
    return $response;
});

//consultas peliculas por nombre
$app->get('/getplatillo/{nombre}', function (Request $request, Response $response, array $args) {
    $nombre = $args["nombre"];
    $db = conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * FROM tplatillos WHERE nombre LIKE '%$nombre%'";
    $res = $db->GetAll($sql);
    $response->getBody()->write(json_encode($res));
    return $response;
});


// CRUD DE USUARIO
// Insertar usuario

$app->post('/insusuario', function (Request $request, Response $response, array $args) {
    $db = conectar();
    $rec = $request->getQueryParams();
    $res = $db->AutoExecute("tusuarios", $rec, "INSERT");
    $response->getBody()->write($res);
    return $response;
});

// Modificar usuario
$app->put('/updusuario', function (Request $request, Response $response, array $args) {
    $db = conectar();
    $rec = $request->getQueryParams();
    $res = $db->AutoExecute("tusuarios", $rec, "UPDATE", "id=$rec[id]");
    $response->getBody()->write($res);
    return $response;
});

// Eliminar usuario por ID
$app->delete('/deleteusuario/{id}', function (Request $request, Response $response, array $args) {
    $id = $args["id"];
    $db = conectar();
    $sql = "DELETE FROM tusuarios WHERE id = $id";
    $res = $db->execute($sql);
    $success = ($res !== false);
    $response->getBody()->write(json_encode(['success' => $success]));

    return $response;
});

// Iniciar sesión 
$app->get('/inicio_sesion/{password}', function (Request $request, Response $response, array $args) {
    $password = $args["password"];
    $response->getBody()->write("Iniciar sesión con contraseña: $password");
    return $response;
});

// Obtener datos de usuario por ID
$app->get('/getusuarioID/{id}', function (Request $request, Response $response, array $args) {
    $id = $args["id"];
    $db = conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * FROM tusuarios WHERE id=$id";
    $res = $db->GetAll($sql);
    $response->getBody()->write(json_encode($res));
    return $response;
});

// Obtener datos de todos los usuarios
$app->get('/getusuario', function (Request $request, Response $response, array $args) {
    $db = conectar();
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql = "SELECT * FROM tusuarios";
    $res = $db->GetAll($sql);
    $response->getBody()->write(json_encode($res));
    return $response;
});

// Ejecutar la aplicación Slim
$app->run(); 