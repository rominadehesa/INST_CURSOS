<?php 
require_once ('base.model.php');

class UserModel  extends Model{
    
    public function getUser($usuario){
        $sentencia = $this->getDb()->prepare("SELECT * FROM usuarios WHERE username = ?");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_OBJ);

    }


    
}