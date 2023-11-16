<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PaginasController;

$router = new Router();


//Zona publica
$router->get('/', [PaginasController::class, 'index']);
$router->get('/paneles', [PaginasController::class, 'paneles']);
$router->get('/aireAcondicionado', [PaginasController::class, 'aireAcondicionado']);
$router->get('/domotica', [PaginasController::class, 'domotica']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);


$router->comprobarRutas();
