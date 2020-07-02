<?php 
    require_once ('base.model.php');

    class CommentsModel extends Model{
    
    //Trae todas los comentarios
    public function getAll($id){
        $sentencia = $this->getDb()->prepare("SELECT * FROM comentarios WHERE id_curso_fk = ?"); 
        $sentencia->execute([$id]);
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        return $comentarios;
    }

    public function getprueba(){
        $sentencia = $this->getDb()->prepare("SELECT comentario FROM comentarios"); 
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

    public function deleteComment($id){
        $sentencia = $this->getDb()->prepare("DELETE FROM comentarios WHERE id_comentario = ?");
        $sentencia->execute([$id]);
    }

    public function insert($comentario, $puntuacion, $id_usuario_fk, $id_curso_fk){
        $sentencia = $this->getDb()->prepare('INSERT INTO comentarios(comentario, puntuacion, id_usuario_fk, id_curso_fk) VALUES (?, ?, ?, ?)');
        return $sentencia->execute([$comentario, $puntuacion, $id_usuario_fk, $id_curso_fk]);

    }
}