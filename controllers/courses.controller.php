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

        public function coursesOfArea($id){
            $cursos = $this->model->getCoursesOfArea($id);
            $this->view->viewCoursesOfArea($cursos);
        }

        public function showAllCourses(){
            $cursos = $this->model->getAllCourses();
            $this->view->viewAllCourses($cursos); 
        }

        public function showDetailsCourse($idcurso){
            $detalle=$this->model->getCourse($idcurso);
            $this->view->viewDetails($detalle);
        }
}