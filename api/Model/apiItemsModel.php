<?php
require_once 'Model.php';

class apiItemsModel extends Model{

    public function __construct() {
        parent::__construct();
    }

    function getItemsByFolder($id){
        $query = $this->db->prepare('SELECT * FROM items WHERE id_folder = ?');
        $query->execute([$id]);
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function insertItem($info,$id_folder){
        $query = $this->db->prepare('INSERT INTO items(info,id_folder) VALUES (?,?)');
        return $query->execute([$info,$id_folder]);
    }

}