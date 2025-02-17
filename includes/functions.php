<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCTIONS_URL', __DIR__ . 'functions.php');
define('IMAGES_FOLDER', $_SERVER['DOCUMENT_ROOT'] . '/images/');
define('ROOT_PATH', realpath(__DIR__ . '/../'));
define('BASE_URL', 'http://localhost:3000');


function incluirTemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/$nombre.php";
}

function estadoAuth(): void {
    session_start();
    if (!$_SESSION['login']) {
        header('Location: /');
    }
}

function debug($variable): void {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    exit;
}

//escapa el HTML
function s($html): string {
    $s = htmlspecialchars($html);
    return $s;
}

//validar tipo de contenido
function validarTipoContenido($tipo) {
    $tipos = ['vendedor', 'propiedad'];
    return in_array($tipo, $tipos);
}

//mostrar los mensajes
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch ($codigo) {
        case 1:
            $mensaje = 'Registrado Correctamente';
            break;
        case 2:
            $mensaje = 'Actualizado Correctamente';
            break;
        case 3:
            $mensaje = 'Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }

    return $mensaje;
}

function validarRedireccionar($url) {
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    //si no es valido redireccionar
    if (!$id) {
        header("Location: $url");
    }
    return $id;
}
