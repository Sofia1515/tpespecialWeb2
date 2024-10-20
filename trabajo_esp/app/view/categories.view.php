<?php
require_once './librerias/Smarty/libs/Smarty.class.php';


class categoriesView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }


    function showCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('app/templates/categories.tpl');
    }

    function showError($msj){
        echo "<h1>ERROR</h1>";
        echo "<h2> $msj </h2>";

    }

    function showEditForm($artista) {
        $this->smarty->assign('artista', $artista);
        $this->smarty->display("app/templates/form_alta.tpl");
    }

    function showCancionesByArtist($canciones) {
        $this->smarty->assign('canciones', $canciones);
        $this->smarty->display('app/templates/cancionesByArtista.tpl');
    }



}