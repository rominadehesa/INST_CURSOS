<?php
    require_once 'models/courses.model.php';
    require_once 'views/courses.view.php'; 

    class HomeController {

        private $model;
        private $view; 

        public function __construct(){
            $this->model = new CoursesModel;
            $this->view = new CoursesView;
        }

        public function showHome(){
            $this->view->home(); 
        }
    }