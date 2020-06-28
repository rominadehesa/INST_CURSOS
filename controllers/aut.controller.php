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
        //formulario para que el usuario se registre
        public function showRegistry(){
            $this->view->ViewFormRegistry();
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
                $_SESSION['IS_LOGGED'] = true;
                $_SESSION['ID_USER'] = $user->id_usuario;
                $_SESSION['USERNAME'] = $user->username;
            header("Location: " . BASE_URL . "administer");
            } else {
                $this->view->ViewFormLogin('Datos invalidos'); 
            }
        }

        public function PostRegistry(){
            $usuario = $_POST['usuario'];
            $password = $_POST['contraseña'];
            //encriptar contraseña 
            
            $contraseña = $this->PasswordSegurity($password);
            //if (!empty($usuario) || !empty($contraseña)) {
                $this->model->newUser($usuario, $contraseña); //funciona hasta aca
            //}
            //else {
            //    $this->view->ViewFormRegistry('Datos incompletos'); 
            //}
        }

        private function PasswordSegurity($password){
            $clave = $password;
            $clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);
            return $clave_encriptada; 
        }

        public function logout() {
            session_start();
            session_destroy();
            header("Location: " . BASE_URL . 'home');
        }
    }