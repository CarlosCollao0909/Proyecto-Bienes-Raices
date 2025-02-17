<?php

namespace MVC;

class Router {
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn) {
        $this->rutasGET[$url] = $fn;
    }

    public function post($url, $fn) {
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas() {
        session_start();
        $auth = $_SESSION['login'] ?? null;
        //array con las rutas protegidas
        $rutasProtegidas = ['/admin', '/propiedades/create', '/propiedades/update', '/propiedades/delete', '/vendedores/create', '/vendedores/update', '/vendedores/delete'];

        // $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        $urlActual = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];

        if ($metodo === 'GET') {
            $fn = $this->rutasGET[$urlActual] ?? null;
        } else if ($metodo === 'POST') {
            $fn = $this->rutasPOST[$urlActual] ?? null;
        }

        //proteger las rutas
        if (in_array($urlActual, $rutasProtegidas) && !$auth) {
            header('Location: /');
        }

        if ($fn) {
            //la url existe y hay una funcion asociada
            call_user_func($fn, $this);
        } else {
            echo "Pagina no encontrada";
        }
    }

    //mostrar una vista
    public function render($view, $datos = []) {
        foreach ($datos as $key => $value) {
            $$key = $value;
        }
        ob_start(); //almacena en memoria durante un momento
        include __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean(); //limpia el buffer
        include __DIR__ . '/views/layout.php';
    }
}
