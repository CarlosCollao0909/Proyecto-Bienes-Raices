<?php 

namespace Controllers;

use MVC\Router;
use Model\Admin;

class LoginController {
    public static function login(Router $router) {
        $errores = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Admin($_POST);
            $errores = $auth->validar();
            if(empty($errores)) {
                //verificar que el usuario exista
                $resultado = $auth->userExists();
                if(!$resultado) {
                    //si el usuario no existe
                    $errores = Admin::getErrores();
                } else {
                    //verificar si el password es correcto
                    $autenticado = $auth->checkPassword($resultado);
                    if ($autenticado) {
                        //autenticar al usuario
                        $auth->autenticar();
                    } else {
                        $errores = Admin::getErrores();
                    }
                }
            }
        }

        $router->render('auth/login', [
            'errores' => $errores
        ]);
    }

    public static function logout() {
        session_start();
        $_SESSION = [];
        session_destroy();
        header('Location: /');
    }
}