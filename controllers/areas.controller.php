<?php
    require_once 'views/courses.view.php';
    require_once 'models/areas.model.php'; 

    class AreasController {

        private $model;
        private $view; 

        public function __construct(){
            $this->model = new AreasModel;
            $this->view = new CoursesView;
        }
        public function showAreas(){
            $areas = $this->model->getAllAreas();
            $this->view->viewAreas($areas);
        }


    }