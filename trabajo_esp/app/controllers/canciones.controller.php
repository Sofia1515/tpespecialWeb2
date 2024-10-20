<?php
require_once './app/models/canciones.model.php';
require_once './app/views/canciones.view.php';

class CancionesController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new CancionesModel();
        $this->view = new CancionesView();
    }

    function showAllCanciones() {
    
        $tasks = $this->model->getAllCanciones();

        $this->view->showCanciones($tasks);
    
    }

    function showCanciones($id) {
        $tasks = $this->model->getCanciones($id);

        $this->view->showCancion($tasks);
    }


}