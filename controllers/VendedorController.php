<?php 

namespace Controllers;

use MVC\Router;
use Model\Vendedor;

class VendedorController {
    public static function create(Router $router) {
        $vendedor = new Vendedor;
        $errores = Vendedor::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //crear una nueva instancia
            $vendedor = new Vendedor($_POST['vendedor']);
        
            //validar que no haya campos vacios
            $errores = $vendedor->validar();
        
            if(empty($errores)){
                $vendedor->create();
            }
        }

        $router->render('vendedores/create', [
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);
    }

    public static function update(Router $router) {
        $id = validarRedireccionar('/admin');
        $vendedor = Vendedor::find($id);
        $errores = Vendedor::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //asignar los atributos
            $args = $_POST['vendedor'];
            //sincronizar el objeto en memoria con los cambios realizados por el usuario
            $vendedor->sincronizar($args);
        
            //validar
            $errores = $vendedor->validar();
        
            if (empty($errores)) {
                $vendedor->update();
            }
        }

        $router->render('vendedores/update', [
            'errores' => $errores,
            'vendedor' => $vendedor
        ]);
    }

    public static function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if ($id) {
                $tipo = $_POST['tipo'];
        
                if (validarTipoContenido($tipo)) {
                    $vendedor = Vendedor::find($id);
                    $vendedor->delete();
                }
            }
        }
    }
}
?>