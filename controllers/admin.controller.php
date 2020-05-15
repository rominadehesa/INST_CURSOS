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

        //eliminar area
        public function deleteArea($id){
            $this->modelAreas->delete($id);
            header('Location: ' . BASE_URL . "administrar");
        }
        //muestra el formulario para agregar una area
        public function showFormAddArea(){
            $this->view->viewFormArea();
        }
        //agrega una area
        public function addArea(){
            $area=$_POST['x'];
            $this->modelAreas->insertArea($area);
            header('Location: ' . BASE_URL . "administrar");
        }

        // ABM CURSOS

        //eliminar curso
        public function deleteCourse($id){
            $this->modelCourses->delete($id);
            header('Location: ' . BASE_URL . "administrar");
        }
        //muestra el formulario para agregar un curso
        public function showFormAddCourse(){
            $this->view->viewFormCourse();
        }
        //agrega un curso
        public function addCourse(){
            $curso=$_POST['curso']; 
            $descripcion=$_POST['descripcion'];
            $duracion=$_POST['duracion']; 
            $idarea=$_POST['id_area'];
            
            echo $curso, $descripcion, $duracion, $idarea;
        }
    }