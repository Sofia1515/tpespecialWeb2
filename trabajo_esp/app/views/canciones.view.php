<?php

class CancionesView {

    function showCanciones($tasks) {
        require_once './templates/lista_canciones.phtml';
    }

    function showCancion($tasks) {
        require_once './templates/lista_cancion.phtml';
    }
}