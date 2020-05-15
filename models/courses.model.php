<?php 
// Modelo de cursos
class CoursesModel{

    private function createConection() {
        $host = 'localhost'; // localhost
        $userName = 'root'; // casi siempre es root
        $password = ''; // puede ser vacio
        $database = 'db_cursos'; // nombre de la base de datos

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
            
            // solo en modo desarrollo
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
        return $pdo;
    }
    //Trae todos los cursos por area
    public function getCoursesOfArea($id){
        $db = $this->createConection();

        $sentencia = $db->prepare("SELECT db_areas.area AS area, db_cursos.curso, 
        db_cursos.descripcion, db_cursos.duracion, db_cursos.id_curso FROM db_cursos INNER JOIN db_areas 
        ON db_cursos.id_area = db_areas.id_area WHERE db_areas.id_area = ?"); 
        $sentencia->execute([$id]);
        $cursos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $cursos;
    }
    //Trae todos los cursos
    public function getAllCourses(){
        $db = $this->createConection();
        
           
        $sentencia = $db->prepare("SELECT db_areas.area AS area, db_cursos.curso,
         db_cursos.descripcion, db_cursos.duracion, db_cursos.id_curso FROM db_cursos 
         INNER JOIN db_areas ON db_cursos.id_area = db_areas.id_area"); 
        $sentencia->execute();
        $cursos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $cursos;
    }
    //Trae los detalles de un solo curso
    public function getCourse($idcurso){

        $db = $this->createConection();
        
        $sentencia = $db->prepare("SELECT db_areas.area AS area, db_cursos.curso, db_cursos.descripcion, db_cursos.duracion FROM db_cursos INNER JOIN db_areas 
        ON db_cursos.id_area = db_areas.id_area WHERE db_cursos.id_curso = ?"); 
        $sentencia->execute([$idcurso]);
        $detalles = $sentencia->fetch(PDO::FETCH_OBJ);
        return $detalles;
    }
    //Borra un curso
    public function delete($id_curso){
        $db = $this->createConection();
    
        $sentencia = $db->prepare('DELETE FROM db_cursos WHERE id_curso = ?');
        $sentencia->execute([$id_curso]);
    }
    //Agrega un curso con su area
    public function insertCourse($curso, $descripcion, $duracion, $idarea){
        $db = $this->createConection();
    
        $sentencia = $db->prepare("INSERT INTO `db_cursos`(`curso`, `descripcion`, `duracion`, `id_area`) VALUES (?, ?, ?, ?)");
        $sentencia->execute([$curso, $descripcion, $duracion, $idarea]);
    }

}