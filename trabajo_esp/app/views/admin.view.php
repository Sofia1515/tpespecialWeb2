<?php

class AdminView {

    function showAdmin_canciones($tasks_canciones, $tasks_artistas) {
        require_once './templates/admin.canciones.phtml';
    }

    function admin_showError($msg){
        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";
    }
}