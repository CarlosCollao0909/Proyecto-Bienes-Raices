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

            if (empty($errores)) {
                $escritor->create();
            }
        }

        $router->render('escritores/create', [
            'errores' => $errores,
            'escritor' => $escritor
        ]);
    }

    public static function update(Router $router) {
        $id = validarRedireccionar('/admin');
        $escritor = Escritor::find($id);
        $errores = Escritor::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //asignar los atributos
            $args = $_POST['escritor'];
            //sincronizar el objeto en memoria con los cambios realizados por el usuario
            $escritor->sincronizar($args);

            //validar
            $errores = $escritor->validar();

            if (empty($errores)) {
                $escritor->update();
            }
        }

        $router->render('escritores/update', [
            'errores' => $errores,
            'escritor' => $escritor
        ]);
    }

    public static function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $escritor = Escritor::find($id);
                $escritor->delete();
            }
        }
    }
}
