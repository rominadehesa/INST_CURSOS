 <?php 
    require_once ('base.model.php');
    class AreasModel extends Model{
    
    //Trae todas las areas
    public function getAllAreas(){
        
        $sentencia = $this->getDb()->prepare("SELECT * FROM areas"); 
        $sentencia->execute();
        $areas = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $areas;
    }
    //trae una area
    public function getArea($id){
        $sentencia = $this->getDb()->prepare("SELECT id_area, area FROM `areas` WHERE id_area = ?");
        $sentencia->execute([$id]);
        $areas = $sentencia->fetch(PDO::FETCH_OBJ); 
        
        return $areas;

    }
    //ABM de areas
    
    //Agrega un area
    public function insertArea($area){
        $sentencia = $this->getDb()->prepare("INSERT INTO areas (area) VALUES (?)");
        $sentencia->execute([$area]);
    }

    //Elimina un area
    public function delete($id){
        $sentencia = $this->getDb()->prepare("DELETE FROM areas WHERE id_area = ?");
        $sentencia->execute([$id]);
    }

    //Modifica un area
    public function edit($area, $id){
        $sentencia = $this->getDb()->prepare("UPDATE areas SET area= ? WHERE id_area = ?");
        $sentencia->execute([$area, $id]);
        
    }


 }