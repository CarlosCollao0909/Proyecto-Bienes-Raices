<?php

namespace Controllers;

use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\ImageManager as Image;
use Model\EntradaBlog;
use Model\Escritor;
use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;

class PropiedadController {
    public static function index(Router $router) {
        $propiedades = Propiedad::all();
        $vendedores = Vendedor::all();
        $escritores = Escritor::all();
        $entradasBlog = EntradaBlog::all();
        //variables con los mensajes
        $resultado = $_GET['resultado'] ?? null;
        $router->render('propiedades/admin', [
            'propiedades' => $propiedades,
            'vendedores' => $vendedores,
            'escritores' => $escritores,
            'entradasBlog' => $entradasBlog,
            'resultado' => $resultado
        ]);
    }
    public static function create(Router $router) {
        $propiedad = new Propiedad;
        $vendedores = Vendedor::all();
        $errores = Propiedad::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $propiedad = new Propiedad($_POST['propiedad']);
            //generar un nombre unico para la imagen
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            if ($_FILES['propiedad']['tmp_name']['imagen']) {
                $manager = new Image(GdDriver::class);
                $imagen = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800, 600);
                $propiedad->setImagen($nombreImagen);
            }

            $errores = $propiedad->validar();

            //revisar que el array de errores este vacio
            if (empty($errores)) {

                if (!is_dir(IMAGES_FOLDER)) {
                    mkdir(IMAGES_FOLDER);
                }

                //guardar la imagen en la carpeta
                $imagen->save(IMAGES_FOLDER . $nombreImagen);

                $propiedad->create();
            }
        }
        $router->render('propiedades/create', [
            'propiedad' => $propiedad,
            'vendedores' => $vendedores,
            'errores' => $errores
        ]);
    }
    public static function update(Router $router) {
        $id = validarRedireccionar('/admin');

        $propiedad = Propiedad::find($id);
        $vendedores = Vendedor::all();
        $errores = Propiedad::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //asignar los atributos
            $args = $_POST['propiedad'];
            $propiedad->sincronizar($args);
        
            //validacion
            $errores = $propiedad->validar();
        
            //revisar que el array de errores este vacio
            if (empty($errores)) {
                //generar un nombre unico para la imagen
                $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
                //subida de archivos
                if ($_FILES['propiedad']['tmp_name']['imagen']) {
                    $manager = new Image(GdDriver::class);
                    $imagen = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800, 600);
                    $propiedad->setImagen($nombreImagen);
                    //guardar la imagen
                    $imagen->save(IMAGES_FOLDER . $nombreImagen);
                }
        
                $propiedad->update();
        
            }
        }

        $router->render('propiedades/update', [
            'propiedad' => $propiedad,
            'vendedores' => $vendedores,
            'errores' => $errores

        ]);
    }

    public static function delete(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //validar id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
        
            if ($id) {
                $tipo = $_POST['tipo'];
        
                if (validarTipoContenido($tipo)) {
                    $propiedad = Propiedad::find($id);
                    $propiedad->delete();
                }
            }
        }
    }
}
