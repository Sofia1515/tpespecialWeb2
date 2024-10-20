<?php
include_once 'app/controller/categories.controller.php';

//defino la base url para la construccion de links con urls semanticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));

//lee la accion
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'listar'; //accion por defecto si no envian
}


//parsea la accion ej: suma 1/2 -->['suma', 1, 2]
$params = explode('/', $action);

//determina que camino seguir segun la accion

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST); // Verifica qué datos se están enviando
}

switch($params[0]){
    case 'listar';
        $controller = new CategoriesController();
        $controller->show();
        break;
    case 'agregar':
        $controller = new CategoriesController();
        $controller->addArtista();
        break;
    case 'eliminar':
        $controller = new CategoriesController();
        $controller->removeArtista($params[1]);
        break;
    case 'editar':
        $controller = new CategoriesController();
        $controller->editArtista($params[1]);
        break;
    case 'send-edit':
        $controller = new CategoriesController();
        $controller->sendEditArtista();
        break;
    case 'ver-canciones':
        $controller = new CategoriesController();
        $controller->listarCancionesArtista($params[1]);
    default:
        header('HTTP/1.0 404 Not Found');
        break;
}