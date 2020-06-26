<?php 
    require_once ('base.model.php');

    class CommentsModel extends Model{
    
    //Trae todas los comentarios
    public function getAll(){
        $sentencia = $this->getDb()->prepare("SELECT * FROM comentarios"); 
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        return $comentarios;
    }

    public function get($id){
        $sentencia = $this->getDb()->prepare("SELECT comentario FROM comentarios WHERE id_comentario = ?");
        $sentencia->execute([$id]);
        $comentario = $sentencia->fetch(PDO::FETCH_OBJ); 
        return $comentario;
    }

    public function delete($id){
        $sentencia = $this->getDb()->prepare("DELETE FROM comentarios WHERE id_comentario = ?");
        $sentencia->execute([$id]);
    }
}