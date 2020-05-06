<?php
    require_once 'views/admin.view.php';
    require_once 'models/admin.model.php'; 

    class AdminController {

        private $model;
        private $view; 

        public function __construct(){
            $this->model = new AdminModel;
            $this->view = new AdminView;
        }

        public function showFormLog(){
            $this->view->viewFormLog();
        }
        public function showConfiguration(){
            $this->view->viewConfiguration(); 
        }

    }