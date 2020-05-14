<?php
    require_once 'views/areas.view.php';
    require_once 'models/areas.model.php'; 

    class AreasController{

        private $model;
        private $view; 

        public function __construct(){
            $this->model = new AreasModel;
            $this->view = new AreasView;
        }
        //listado de categorias(en esta caso, areas)
        public function showAreas(){
            $areas = $this->model->getAllAreas();
            $this->view->viewAreas($areas);
        }


    }