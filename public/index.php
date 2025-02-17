<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\VendedorController;
use Controllers\PropiedadController;
use Controllers\PaginasController;
use Controllers\LoginController;

$router = new Router();

//zona privada
$router->get('/admin', [PropiedadController::class, 'index']);

$router->get('/propiedades/create', [PropiedadController::class, 'create']);
$router->post('/propiedades/create', [PropiedadController::class, 'create']);
$router->get('/propiedades/update', [PropiedadController::class, 'update']);
$router->post('/propiedades/update', [PropiedadController::class, 'update']);
$router->post('/propiedades/delete', [PropiedadController::class, 'delete']);

$router->get('/vendedores/create', [VendedorController::class, 'create']);
$router->post('/vendedores/create', [VendedorController::class, 'create']);
$router->get('/vendedores/update', [VendedorController::class, 'update']);
$router->post('/vendedores/update', [VendedorController::class, 'update']);
$router->post('/vendedores/delete', [VendedorController::class, 'delete']);

//zona publica
$router->get('/', [PaginasController::class, 'index']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/propiedades', [PaginasController::class, 'propiedades']);
$router->get('/propiedad', [PaginasController::class, 'propiedad']);
$router->get('/blog', [PaginasController::class, 'blog']);
$router->get('/entrada', [PaginasController::class, 'entrada']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

//login y autenticacion
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();