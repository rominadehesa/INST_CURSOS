<?php
    require_once 'views/admin.view.php';
    require_once 'models/areas.model.php'; 

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
        //eliminar area
        public function deleteArea($id){
            $this->modelAreas->delete($id);
            header('Location: ' . BASE_URL . "administrar");
        }
        //eliminar curso
        public function deleteCourse($id){
            $this->modelCourses->delete($id);
            header('Location: ' . BASE_URL . "administrar");
        }


    }