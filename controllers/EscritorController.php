<?php

namespace Controllers;

use MVC\Router;
use Model\Escritor;

class EscritorController {
    public static function create(Router $router) {
        $escritor = new Escritor;
        $errores = Escritor::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //crear una nueva instancia
            $escritor = new Escritor($_POST['escritor']);
        
            //validar que no haya campos vacios
            $errores = $escritor->validar();
        
            if(empty($errores)){
                $escritor->create();
            }
        }

        $router->render('escritores/create', [
            'errores' => $errores,
            'escritor' => $escritor
        ]);
    }
}