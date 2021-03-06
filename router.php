<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        include_once('index.php');
        break;
    case 'estructura':
        include_once('estructura.php');
        break;
    case 'clasificacion':
        include_once('clasificacion.php');
        break;
    case 'caracteristicas':
        include_once('caracteristicas.php');
    break;
    case 'equipo':
        include_once('equipo.php');
    break;
    case 'objetivos':
        include_once('objetivos.php');
    break;
    case 'metas':
        include_once('metas.php');
    break;
    case 'recursosMateriales':
        include_once('recursosMateriales.php');
    break;
    case 'recursoshumanos':
        include_once('recursoshumanos.php');
    break;
    case 'organigrama':
        include_once('organigrama.php');
    break;
    default:
        echo "error";
        break;
}
