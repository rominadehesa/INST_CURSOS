<?php
    require_once 'views/aut.view.php';
    require_once 'models/aut.model.php'; 

    class AutController {

        private $model;
        private $view; 

        public function __construct(){
            $this->model = new AutModel;
            $this->view = new AutView;
        }

        public function showLogin(){
            $this->view->ViewFormLogin(); 
        }

    }