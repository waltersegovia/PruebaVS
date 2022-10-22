<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\RequestHandlerInterface;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use Slim\Routing\RouteContext;


//Instancio App
$app=AppFactory::create();

//Rutas
$app->group('/usuarios', function (RouteCollectorProxy $group) {
      $group->get('[/]', \UsuarioController::class . ':TraerTodos');
      $group->get('/{usuario}', \UsuarioController::class . ':TaerUno');
      $group->get('[/]', \UsuarioController::class . ':CargarUno');
});

$app->get('[/]', function(Request $request, Reponse $response){
        $response->getBody()->write("Slim Framework 4 PHP");
        return $response; 
});

?>