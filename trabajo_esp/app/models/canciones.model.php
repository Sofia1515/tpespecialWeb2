<?php

class CancionesModel {
    private $db;

    function __construct() {
        $this->db = $this->getConection();
    }

    private function getConection() {
        return new PDO('mysql:host=localhost;dbname=play_music;charset=utf8', 'root' , '');
    }

    function getAllCanciones(){
        $db = $this->getConection();
        
        $query = $db->prepare('SELECT * FROM canciones');
        $query->execute();
    
        //tasks es un arreglo de tareas
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $tasks;
    }

    function getCanciones($id){
        $db = $this->getConection();

        $query = $db->prepare('SELECT * FROM canciones WHERE id_artista = ?');
        $query->execute([$id]);

        $tasks = $query->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    }


}