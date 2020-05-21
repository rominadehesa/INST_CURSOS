 <?php 

    class AreasModel{
    
    private function createConection() {
        $host = 'localhost'; 
        $userName = 'root'; 
        $password = '';
        $database = 'db_cursos'; // nombre de la base de datos
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
        return $pdo;
    }
    
    //Trae todas las areas
    public function getAllAreas(){
        $db = $this->createConection();
        
           
        $sentencia = $db->prepare("SELECT * FROM areas"); 
        $sentencia->execute();
        $areas = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $areas;
    }

    //ABM de areas
    
    //Agrega una area
    public function insertArea($area){
        $db = $this->createConection();
    
        $sentencia = $db->prepare("INSERT INTO areas (area) VALUES (?)");
        $sentencia->execute([$area]);
    }

    //Elimina una area
    public function delete($id){
        $db = $this->createConection();
    
        $sentencia = $db->prepare("DELETE FROM areas WHERE id_area = ?");
        $sentencia->execute([$id]);
    }
 }