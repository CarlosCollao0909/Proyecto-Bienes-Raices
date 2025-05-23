<?php

namespace Controllers;

use Model\EntradaBlog;
use Model\Escritor;
use MVC\Router;

class BlogController {
    public static function create(Router $router) {
        $entrada = new EntradaBlog;
        $escritores = Escritor::all();
        $errores = EntradaBlog::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //crear una nueva instancia
            $entrada = new EntradaBlog($_POST['entrada']);
        
            //validar que no haya campos vacios
            $errores = $entrada->validar();
        
            if(empty($errores)){
                $entrada->create();
            }
        }

        $router->render('blog/create', [
            'entrada' => $entrada,
            'escritores' => $escritores,
            'errores' => $errores
        ]);
    }
}