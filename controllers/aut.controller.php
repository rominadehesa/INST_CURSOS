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
        //formulario para que el usuario pueda loguearse
        public function showLogin(){
            $this->view->ViewFormLogin(); 
        }
        //verificar que el usuario esta registrado
        public function verification(){
            $usuario = $_POST['usuario'];
            $password = $_POST['contraseña'];

        }

    }