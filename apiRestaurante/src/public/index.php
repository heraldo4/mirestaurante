<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
require "conexion.php";

$app = new \Slim\App;


//--------crud productos-----------------

// insertar
$app->post('/insproducto', function (Request $request, Response $response, array $args) {
    //abrir la conexion
    $db=conectar();
    //obtener los datos a insertar
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tproductos",$rec,"INSERT");
    //retornar el valor que indica si se ejecuto correctamente        
    $response->getBody()->write($res);
    return $response;
});

//modificar
$app->put('/updproducto', function (Request $request, Response $response, array $args) {
    $db=conectar();
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tproductos",$rec,"UPDATE","id=$rec[id]");
    $response->getBody()->write($res);    
    return $response;
});
//eliminar
$app->delete('/delproducto/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    $sql="DELETE FROM tproductos WHERE id=$id";
    $res=$db->execute($sql);
    $response->getBody()->write($res);
    return $response;
});

//consultas obtenr todas las peliculas
$app->get('/getproductos', function (Request $request, Response $response, array $args) {
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tproductos";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

//consultas obtener info de una pelicula
$app->get('/getproducto/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tproductos WHERE id=$id";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

//consultas peliculas por nombre
$app->get('/getproductos/{nombre}', function (Request $request, Response $response, array $args) {
    $nombre=$args["nombre"];

    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tproductos where nombre LIKE '%$nombre%'";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
});


$app->run();