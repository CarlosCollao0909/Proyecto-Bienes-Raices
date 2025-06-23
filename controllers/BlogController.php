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

    public static function update(Router $router) {
        $id = validarRedireccionar('/admin');
        $entrada = EntradaBlog::find($id);
        $escritores = Escritor::all();
        $errores = EntradaBlog::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //asignar los atributos
            $args = $_POST['entrada'];
            //sincronizar el objeto en memoria con los cambios realizados por el usuario
            $entrada->sincronizar($args);
        
            //validar
            $errores = $entrada->validar();
        
            if (empty($errores)) {
                $entrada->update();
            }
        }

        $router->render('blog/update', [
            'entrada' => $entrada,
            'escritores' => $escritores,
            'errores' => $errores
        ]);
    }

    public static function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if ($id) {
                $blog = EntradaBlog::find($id);
                $blog->delete();
            }
        }
    }
}