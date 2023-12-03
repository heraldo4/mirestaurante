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

// insertar
$app->post('/insplatillo', function (Request $request, Response $response, array $args) {
    //abrir la conexion
    $db=conectar();
    //obtener los datos a insertar
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tplatillos",$rec,"INSERT");
    //retornar el valor que indica si se ejecuto correctamente        
    $response->getBody()->write($res);
    return $response;
});

//modificar
$app->put('/updplatillo', function (Request $request, Response $response, array $args) {
    $db=conectar();
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tplatillos",$rec,"UPDATE","id=$rec[id]");
    $response->getBody()->write($res);    
    return $response;
});
//eliminar
$app->delete('/delplatillo/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    $sql="DELETE FROM tplatillos WHERE id=$id";
    $res=$db->execute($sql);
    $response->getBody()->write($res);
    return $response;
});

//consultas obtenr todas las peliculas
$app->get('/getplatillos', function (Request $request, Response $response, array $args) {
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tplatillos";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

//consultas obtener info de una pelicula
$app->get('/getplatillo/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tplatillos WHERE id=$id";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

// MAE ESTO ESTÁ PRODUCIENDO UN ERROR CUANDO ACCEDE AL POSTMAN EL TEMA ES QUE
// REPETIRSE CON EL DE ARRIBA EN CUANTO METODO HAY QUE ARREGLARLO, PARECE
// QUE EL ID Y NOMBRE LOS RECONOCE COMO EL MISMO
//consultas peliculas por nombre
$app->get('/getplatillo/{nombre}', function (Request $request, Response $response, array $args) {
    $nombre=$args["nombre"];

    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tplatillos where nombre LIKE '%$nombre%'";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
});


// CRUD DE USUARIO
// INSERTAR USUARIO
$app->post('/insusuario', function (Request $request, Response $response, array $args) {
    $db=conectar();
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tusuarios", $rec, "INSERT");
    $response->getBody()->write($res);
    return $response;
});

// MODIFICAR USUARIO
$app->put('/updusuario', function (Request $request, Response $response, array $args) {
    $db=conectar();
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tusuarios",$rec,"UPDATE","id=$rec[id]");
    $response->getBody()->write($res);    
    return $response;
});

// ELIMINAR USUARIO POR ID
$app->delete('/deleteusuario/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    $sql="DELETE FROM tusuarios WHERE id=$id";
    $res=$db->execute($sql);
    $response->getBody()->write($res);
    return $response;
});

// INICIAR SESIÓN
$app->get('/inicio_sesion/{password}', function (Request $request, Response $response, array $args) {
    $password = $args["password"];
    $response->getBody()->write("Iniciar sesión con contraseña: $password");
    return $response;
});

// OBTENER DATOS DE USUARIO POR ID
$app->get('/getusuario/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tusuarios WHERE id=$id";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

// OBTENER DATOS DE TODOS LOS USUARIOS
$app->get('/getusuarios', function (Request $request, Response $response, array $args) {
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tusuarios";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

$app->run();