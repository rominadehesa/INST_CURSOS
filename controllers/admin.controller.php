<?php
//Controllador para el Administrador
    require_once 'views/admin.view.php';
    require_once 'models/areas.model.php'; 
    require_once 'models/courses.model.php'; 

    class AdminController {

        private $modelAreas;
        private $modelCourses;
        private $view; 

        public function __construct(){
            $this->modelAreas = new AreasModel;
            $this->modelCourses = new CoursesModel;
            $this->view = new AdminView;
        }

        //configuracion general
        public function administration(){
            $areas = $this->modelAreas->getAllAreas();
            $cursos = $this->modelCourses->getAllCourses();
            $this->view->viewConfiguration($areas, $cursos); 
        }

        // ABM AREAS

        //muestra el formulario para agregar una area
        public function showFormAddArea(){
            $this->view->viewFormArea();
        }
        //agrega un area
        public function addArea(){
            $area=$_POST['x'];
            $this->modelAreas->insertArea($area);
            
            header('Location: ' . BASE_URL . "administer");
        }

        //eliminar area
        public function deleteArea($id){
            $this->modelAreas->delete($id);
            header('Location: ' . BASE_URL . "administer");
        }
        //modificar un area
        public function showFormEditArea($id){
            $this->view->viewFormEditArea($id);
        }
        public function editArea(){
            $area = $_POST['x'];
            $id = $_POST['id'];
            if (!empty($area)){
            $this->modelAreas->edit($area, $id); 
            header('Location: ' . BASE_URL . "administer"); 
            } else {
                echo 'error'; 
            }
        }

        // ABM CURSOS

        
        //muestra el formulario para agregar un curso
        public function showFormAddCourse(){
            $areas=$this->modelAreas->getAllAreas();
            $this->view->viewFormCourse($areas);
        }
        //agrega un curso
        public function addCourse(){
            $curso=$_POST['curso']; 
            $descripcion=$_POST['descripcion'];
            $duracion=$_POST['duracion']; 
            $idarea=$_POST['id_area'];
            
            $this->modelCourses->insertCourse($curso, $descripcion, $duracion, $idarea);
            header('Location: ' . BASE_URL . "administer");
        }
        //eliminar curso
        public function deleteCourse($id){
            $this->modelCourses->delete($id);
            header('Location: ' . BASE_URL . "administer");
        }
        //muestra el formulario para editar un curso
        public function showFormEditCourse($id){
            $areas = $this->modelAreas->getAllAreas();
            $this->view->viewFormEditCourse($id, $areas);
        }
        public function editCourse(){
            $idcurso = $_POST['idcurso'];
            $curso = $_POST['curso'];
            $descripcion = $_POST['descripcion'];
            $duracion = $_POST['duracion'];
            $idarea = $_POST['idarea'];
            if (!empty($idcurso) && !empty($curso) && !empty($descripcion) && !empty($duracion) && !empty($idarea)){
                $this->modelCourses->edit($idcurso, $curso, $descripcion, $duracion, $idarea);
                header('Location: ' . BASE_URL . "administer");
            } else {
                echo 'error';
            }
        }

        
    }