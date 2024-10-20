<?php

class AdminView {

    function showAdmin_canciones($tasks_canciones, $tasks_artistas) {
        require_once './templates/admin.canciones.phtml';
    }

    function showEditCancion($cancion, $tasks_artistas) {
        require_once './templates/form.edit.cancion.phtml';
    }

    function admin_showError($msg){
        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";
    }
}