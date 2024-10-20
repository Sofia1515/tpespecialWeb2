<?php


class categoriesModel{

    function getCategories(){
        $db = new PDO('mysql:host=localhost;dbname=play_music;charset=utf8' , 'root' , '' );
    
        $query = $db->prepare('SELECT * FROM artista');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $categories;
    }  

    function insertArtista($name, $fechaNacimiento, $pais) {
        $db = new PDO('mysql:host=localhost;dbname=play_music;charset=utf8' , 'root' , '' );
    
        $query = $db->prepare('INSERT INTO artista (nombre_artista, fecha_nacimiento, pais) VALUES (?, ?, ?)');
        $query->execute([$name, $fechaNacimiento, $pais]);
    
        return $db->lastInsertId();
    }

    function deleteCategory($id){
        $db = new PDO('mysql:host=localhost;dbname=play_music;charset=utf8' , 'root' , '' );
    
        $query = $db->prepare("DELETE FROM artista WHERE id_artista = ?");
        $query->execute([$id]);
    }

    function getCancionesByArtista($id) {
        $db = new PDO('mysql:host=localhost;dbname=play_music;charset=utf8' , 'root' , '' );
        $query = $db->prepare('SELECT * FROM cancion WHERE id_artista = ?');
        $query->execute([$id]);
        $canciones = $query->fetchAll(PDO::FETCH_OBJ);
        return $canciones;
    }

    function getCategoryById($id) {
        $db = new PDO('mysql:host=localhost;dbname=play_music;charset=utf8' , 'root' , '' );
        $query = $db->prepare("SELECT id_artista, pais, nombre_artista, fecha_nacimiento FROM artista WHERE id_artista = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function updateArtista($id, $nombre, $fechaNacimiento, $pais) {
        $db = new PDO('mysql:host=localhost;dbname=play_music;charset=utf8' , 'root' , '' );
        $query = $db->prepare('UPDATE artista SET nombre_artista = ?, fecha_nacimiento = ?, pais = ? WHERE id_artista = ?');

        $query->execute([$nombre, $fechaNacimiento, $pais, $id]);

        return $query->rowCount();
    }
    

}