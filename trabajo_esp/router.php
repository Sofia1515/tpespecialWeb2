<?php
require_once './app/libs/response.php';
require_once './app/middlewares/session.Auth.Middleware.php';

require_once './app/controllers/admin.controller.php';
require_once './app/controllers/canciones.controller.php';

require_once './app/controllers/auth.controller.php';

require_once './app/views/about.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$res = new Response();

$action = 'listar'; //accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

//listar            ->      ArtistasController();
//agregar           ->      AdminController()
//eliminar/:ID      ->      AdminController()
//nosotros          ->      about();
//canciones         ->      CancionesController();


// parsea la accion
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'listar':
        $controller = new CancionesController();
        $controller->showAllCanciones();
        break;
    case 'nosotros':
        about();
        break;
    case 'admin':
        //sessionAuthMiddleware($res);
        $controller = new AdminController();
        $controller->showAdmin();
        break;
    case 'canciones':
        $controller = new CancionesController();
        $controller->showCanciones($params[1]);
        break;
    case 'agregar_cancion':
        //sessionAuthMiddleware($res);
        $controller = new AdminController();
        $controller->addCancion();
        break;
    case 'eliminar_cancion':
        //sessionAuthMiddleware($res);
        $controller = new AdminController();
        $controller->removeCancion($params[1]);
        break;
    case 'editar_cancion':
        $controller = new AdminController();
        $controller->editCancion($params[1]);
        break;
    case 'actualizar_cancion':
        $controller = new AdminController();
        $controller->updateCancion();
        break;
    case 'showLogin':
        $controller = new AuthController();
        $controller->showLogin();
        break;
    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;
    default:
        header("HTTP/1.0 404 not found");
        echo('404 Page not found'); 
        break;
}
