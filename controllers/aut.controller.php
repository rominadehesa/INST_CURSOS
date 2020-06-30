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

        //verificacion
        private function verify($usuario, $password){
            $user = $this->model->getUser($usuario);
            if ($user && password_verify($password, $user->password)){
            //abro sesion y guardo al usuario
            session_start();
                $_SESSION['IS_LOGGED'] = true;
                $_SESSION['ID_USER'] = $user->id_usuario;
                $_SESSION['USERNAME'] = $user->username;
                $_SESSION['PERMISSION'] = $user->permission;
            return true;
            } else {
                return false; 
            }
        }
        //verificar que el usuario esta registrado
        public function verifyLogin(){
            $usuario = $_POST['usuario'];
            $password = $_POST['contraseña'];
            $session = $this->verify($usuario, $password);
            if($session){
                header("Location: " . BASE_URL . 'administer');
            } else {
                $this->view->ViewFormLogin("Datos invalidos");
            }
        }

        public function VerifyRegistry(){
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];

            //chequear que el nombre del usuario no exista
            $user = $this->model->getUser($usuario);
            if ($user){
                $this->view->ViewFormRegistry('Usuario ya existente');
                die();
            }

            //encriptar contraseña 
            if (!empty($usuario) && !empty($contraseña)) {
                $password = $this->PasswordSegurity($contraseña); 
            } else {
                $this->view->ViewFormRegistry('Datos incompletos');
                die(); 
            }
            //postaer usuario
            if(!empty($password)){
                $newuser = $this->model->newUser($usuario, $password);
            }else {
                $this->view->ViewFormRegistry('Ha ocurrido un error');
                die(); 
            }
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