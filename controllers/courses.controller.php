<?php
    require_once 'models/courses.model.php';
    require_once 'views/courses.view.php'; 

    class CoursesController {

        private $model;
        private $view; 

        public function __construct(){
            $this->model = new CoursesModel;
            $this->view = new CoursesView;
        }
        //home de la pagina
        public function showHome(){
            $this->view->ViewHome(); 
        }
        //lista los cursos de una area seleccionada
        public function coursesOfArea($id){
            $cursos = $this->model->getCoursesOfArea($id);
            $this->view->viewCoursesOfArea($cursos);
        }
        //lista todos los cursos
        public function showAllCourses(){
            $cursos = $this->model->getAllCourses();
            $this->view->viewAllCourses($cursos); 
        }
        //muestra mas detalles de un curso seleccionado
        public function showDetailsCourse($idcurso){
            $detalle=$this->model->getCourse($idcurso);
            $this->view->viewDetails($detalle);
        }
}