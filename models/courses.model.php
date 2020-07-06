<?php 
    require_once ('base.model.php');
    // Modelo de cursos
    class CoursesModel extends Model{

    //Trae todos los cursos por area
    public function getCoursesOfArea($id){
        $sentencia = $this->getDb()->prepare("SELECT areas.area AS area, cursos.curso, 
        cursos.descripcion, cursos.duracion, cursos.id_curso, cursos.imagen FROM cursos INNER JOIN areas 
        ON cursos.id_area_fk = areas.id_area WHERE areas.id_area = ?"); 
        $sentencia->execute([$id]);
        $cursos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $cursos;
    }
    //Trae todos los cursos
    public function getAllCourses(){

        $sentencia = $this->getDb()->prepare("SELECT areas.area AS area, cursos.curso,
         cursos.descripcion, cursos.duracion, cursos.id_curso, cursos.imagen FROM cursos 
         INNER JOIN areas ON cursos.id_area_fk = areas.id_area"); 
        $sentencia->execute();
        $cursos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $cursos;
    }
    //Trae los detalles de un solo curso
    public function getCourse($idcurso){

        $sentencia = $this->getDb()->prepare("SELECT areas.area AS area, cursos.id_curso, cursos.curso, cursos.descripcion, 
        cursos.duracion, cursos.imagen FROM cursos INNER JOIN areas 
        ON cursos.id_area_fk = areas.id_area WHERE cursos.id_curso = ?"); 
        $sentencia->execute([$idcurso]);
        $detalles = $sentencia->fetch(PDO::FETCH_OBJ);
        return $detalles;
    }
    //Borra un curso
    public function delete($id_curso){
        $sentencia = $this->getDb()->prepare('DELETE FROM cursos WHERE id_curso = ?');
        $sentencia->execute([$id_curso]);
    }
    //Agrega un curso con su area
    public function insertCourse($curso, $descripcion, $duracion, $idarea, $imagen = null, $imgname = null){
        $pathImg=null; 
        if ($imagen)
            $pathImg = $this->uploadImage($imagen, $imgname); //lo que nos devuelve la funcion uploadImage
        
        $sentencia = $this->getDb()->prepare("INSERT INTO cursos(curso, descripcion, duracion, id_area_fk, imagen) VALUES (?, ?, ?, ?, ?)");
        return $sentencia->execute([$curso, $descripcion, $duracion, $idarea, $pathImg]);
    }
    //funcion para editar un curso
    public function edit($idcurso, $curso, $descripcion, $duracion, $idarea, $imagen = null, $imgname = null){
        $pathImg=null; 
        if ($imagen)
            $pathImg = $this->uploadImage($imagen, $imgname);
            
        $sentencia = $this->getDb()->prepare("UPDATE cursos SET curso = ?, descripcion = ?, duracion = ? , id_area_fk = ? , imagen = ?
        WHERE id_curso = ?");
        return $sentencia->execute([$curso, $descripcion, $duracion, $idarea, $pathImg, $idcurso]);
    }

    private function uploadImage($imagen, $imgname){
        $target = 'upload/courses/'. uniqid("", true) . "." 
        . strtolower(pathinfo($imgname, PATHINFO_EXTENSION));
        move_uploaded_file($imagen, $target); 
        //funcion para nombrar temporalmente la imagen que subimos, con su extension original 
        
        return $target;
    }

    public function editNotImg($idcurso, $curso, $descripcion, $duracion, $idarea){
        $sentencia = $this->getDb()->prepare("UPDATE cursos SET curso = ?, descripcion = ?, duracion = ? , id_area_fk = ? 
        WHERE id_curso = ?");
        return $sentencia->execute([$curso, $descripcion, $duracion, $idarea, $idcurso]);
    }

    //Edita un curso 
    
    public function deleteImagen($id){
        $sentencia = $this->getDb()->prepare('UPDATE cursos SET imagen= ? WHERE id_curso = ?');
        return $sentencia->execute([null, $id]);
    }

}