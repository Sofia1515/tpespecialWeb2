<?php
include_once 'app/model/categories.model.php';
include_once 'app/view/categories.view.php';

class CategoriesController{
    private $model;
    private $view;


    function __construct(){
       $this->model = new categoriesModel();
       $this->view = new categoriesView();
    }


    function show() {
        //tareas del modelo
        $categories = $this->model->getCategories();
        

        $this->view->showCategories($categories);
    }

    function addArtista() {
        $nombre = $_POST['nombreArtista'];
        $pais = $_POST['pais'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $id = $this->model->insertArtista($nombre, $fechaNacimiento, $pais);
        
        if ($id) {
            header('Location: ' . BASE_URL . 'listar-artistas');
        } else {
            $this->view->showError("hay un error");
        }
    
    }

    function sendEditArtista() {
        $nombre = $_POST['nombreArtista'];
        $pais = $_POST['pais'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $id = $_POST['id'];
        $updatedRows = $this->model->updateArtista($id, $nombre, $fechaNacimiento, $pais);
        
        if ($updatedRows > 0) {
            header('Location: ' . BASE_URL . 'listar-artistas');
        } else {
            $this->view->showError("hay un error");
        }
    
    }

    function removeArtista($id) {
        $this->model->deleteCategory($id);
        header('Location: ' . BASE_URL . 'listar-artistas');
    }

    function listarCancionesArtista($id) {
        $canciones = $this->model->getCancionesByArtista($id);
        $this->view->showCancionesByArtist($canciones);
    }

    function editArtista($id) {
        $artista = $this->model->getCategoryById($id);
        $this->view->showEditForm($artista);
    }
}