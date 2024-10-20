<?php
include_once './app/models/admin.model.php';
include_once './app/views/admin.view.php';


class AdminController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new AdminModel();
        $this->view = new AdminView();
    }

    function showAdmin() {
        // mostrar canciones
        $tasks_canciones = $this->model->getAll_canciones();
        $tasks_artistas = $this->model->getAll_artistas();

        $this->view->showAdmin_canciones($tasks_canciones, $tasks_artistas);
    }

    //agregar cancion
    function addCancion() {
        $autor = $_POST['autor'];
        $name = $_POST['name'];
        $top = $_POST['top'];
        $duracion = $_POST['duracion'];
        $genero = $_POST['genero'];

        $id = $this->model->insert_Cancion($autor, $name, $top, $duracion, $genero);

        if($id) {
            //redirecciono al home dsp de agregar
            header('location: ' . BASE_URL.'admin');
        } else{
            $this->view->admin_showError('no se pudo agregar la cancion');
        }
    }

    //eliminar cancion
    function removeCancion($id) {
        $this->model->delete_Cancion($id);
        header('location: ' . BASE_URL.'admin');
    }

    //update cancion
    function editCancion($id) {
        error_log("ID recibido en editCancion: " . $id);
        $cancion = $this->model->getCancionById($id);
        
        if (!$cancion) {
          $this->view->admin_showError('Canción no encontrada');
            return;
        }
        $tasks_artistas = $this->model->getAll_artistas(); // Obtener artistas para el select
        $this->view->showEditCancion($cancion, $tasks_artistas);
    }
    

    // Procesar la actualización de la canción
    function updateCancion() {
        $id = $_POST['id'];
        $autor = $_POST['autor'];
        $name = $_POST['name'];
        $top = $_POST['top'];
        $duracion = $_POST['duracion'];
        $genero = $_POST['genero'];

        $result = $this->model->updateCancion($id, $autor, $name, $top, $duracion, $genero);

        if ($result) {
            header('location: ' . BASE_URL . 'admin');
        } else {
            $this->view->admin_showError('No se pudo actualizar la canción');
        }
    }

}