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

        $sentencia = $db->prepare("SELECT areas.area AS area, cursos.curso, 
        cursos.descripcion, cursos.duracion, cursos.id_curso FROM cursos INNER JOIN areas 
        ON cursos.id_area_fk = areas.id_area WHERE areas.id_area = ?"); 
        $sentencia->execute([$id]);
        $cursos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $cursos;
    }
    //Trae todos los cursos
    public function getAllCourses(){
        $db = $this->createConection();
        
           
        $sentencia = $db->prepare("SELECT areas.area AS area, cursos.curso,
         cursos.descripcion, cursos.duracion, cursos.id_curso FROM cursos 
         INNER JOIN areas ON cursos.id_area_fk = areas.id_area"); 
        $sentencia->execute();
        $cursos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $cursos;
    }
    //Trae los detalles de un solo curso
    public function getCourse($idcurso){

        $db = $this->createConection();
        
        $sentencia = $db->prepare("SELECT areas.area AS area, cursos.curso, cursos.descripcion, 
        cursos.duracion FROM cursos INNER JOIN areas 
        ON cursos.id_area_fk = areas.id_area WHERE cursos.id_curso = ?"); 
        $sentencia->execute([$idcurso]);
        $detalles = $sentencia->fetch(PDO::FETCH_OBJ);
        return $detalles;
    }
    //Borra un curso
    public function delete($id_curso){
        $db = $this->createConection();
    
        $sentencia = $db->prepare('DELETE FROM cursos WHERE id_curso = ?');
        $sentencia->execute([$id_curso]);
    }
    //Agrega un curso con su area
    public function insertCourse($curso, $descripcion, $duracion, $idarea){
        $db = $this->createConection();
    
        $sentencia = $db->prepare("INSERT INTO cursos(curso, descripcion, duracion, id_area_fk) VALUES (?, ?, ?, ?)");
        $sentencia->execute([$curso, $descripcion, $duracion, $idarea]);
    }

}