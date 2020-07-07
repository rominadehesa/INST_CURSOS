<?php 
require_once ('base.model.php');

class UserModel  extends Model{
    
    public function getUser($usuario){
        $sentencia = $this->getDb()->prepare("SELECT * FROM usuarios WHERE username = ?");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    //trae usuarios administradores
    public function getAdministrators($permission){
        $sentencia = $this->getDb()->prepare("SELECT * FROM usuarios WHERE permission = ?");
        $sentencia->execute([$permission]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    //trae usuarios no administradores
    public function getNotAdministrators($notpermission){
        $sentencia = $this->getDb()->prepare("SELECT * FROM usuarios WHERE permission = ?");
        $sentencia->execute([$notpermission]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //registar nuevo usuario
    public function newUser($usuario, $contraseña){
        $sentencia = $this->getDb()->prepare('INSERT INTO usuarios(username, password, permission) VALUES (?, ?, ?)');
        return $sentencia->execute([$usuario, $contraseña, 0]);
    } 

    //funcion que borra un usuario

    public function delete($id_usuario){
        $sentencia = $this->getDb()->prepare('DELETE FROM usuarios WHERE id_usuario = ?');
        $sentencia->execute([$id_usuario]);
    }

    //funcion que quita permiso al usuario para que sea administrador 

    public function offPermission($id){
        $sentencia = $this->getDb()->prepare("UPDATE usuarios SET permission = ? WHERE id_usuario = ?");
        $sentencia->execute([0, $id]);
    }
    //funcion que da permiso al usuario para que sea administrador
    public function onPermission($id){
        $sentencia = $this->getDb()->prepare("UPDATE usuarios SET permission = ? WHERE id_usuario = ?");
        $sentencia->execute([1, $id]);
    }

}