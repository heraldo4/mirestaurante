<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
require "conexion.php";

$app = new \Slim\App;


//--------crud productos-----------------

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
$app->put('/updplatillos', function (Request $request, Response $response, array $args) {
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
$app->get('/getplatillo', function (Request $request, Response $response, array $args) {
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


$app->run();