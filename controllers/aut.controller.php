<?php
    require_once 'views/aut.view.php';
    require_once 'models/users.model.php'; 

    class AutController {

        private $model;
        private $view; 

        public function __construct(){
            $this->model = new UserModel;
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

            
            //busco el usuario 

            $user = $this->model->getUser($usuario);
            
            if ($user && password_verify($password, $user->password)){
                
                //abro sesion y guardo al usuario
                session_start();
                $_SESSION['ID_USER'] = $user->id_usuarios;
                $_SESSION['USERNAME'] = $user->usuario;
                

                header("Location: " . BASE_URL . "administer");
            }
            else {
                $this->view->ViewFormLogin('Datos invalidos'); 
            }

        }

    }