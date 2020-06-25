<?php 
require_once ('base.model.php');

class UserModel  extends Model{
    
    public function getUser($usuario){
        $sentencia = $this->getDb()->prepare("SELECT * FROM usuarios WHERE username = ?");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //funcion que borra un usuario

    //public function delete($id_usuario){
    //    $sentencia = $this->getDb()->prepare('DELETE FROM usuarios WHERE id_usuarios = ?');
    //    $sentencia->execute([$id_usuario]);
    //}

    //funcion que da permiso al usuario para que sea administrador 

    //public function givePermission($id_usuario, $permiso){
    //   $sentencia = $this->getDb()->prepare("UPDATE usuarios SET permiso = ?,
    //     WHERE id_usuarios = ?");
    //    $sentencia->execute([$permiso, $id_usurios]);
    //}

}