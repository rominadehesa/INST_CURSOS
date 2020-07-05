<?php
    require_once 'views/aut.view.php';
    require_once 'models/users.model.php'; 
    require_once 'helpers/auth.helper.php';

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
        public function verify($usuario, $password){
            $us = $this->model->getUser($usuario);
            if ($us && password_verify($password, $us->password)){
                HelperAuth::login($us);
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
            $xcontraseña = $_POST['r-contraseña'];

            //chequear que el nombre del usuario no exista
            $user = $this->model->getUser($usuario);
            if ($user){
                $this->view->ViewFormRegistry('Usuario ya existente');
                die();
            }

            if ($contraseña != $xcontraseña){
                $this->view->ViewFormRegistry('Las contraseñas no son iguales');
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

            if($newuser){
                $this->verify($usuario, $contraseña);
                header("Location: " . BASE_URL . 'home');
            }
        }

        private function PasswordSegurity($password){
            $clave = $password;
            $clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);
            return $clave_encriptada; 
        }

        public function logout() {
            HelperAuth::logout();
            header("Location: " . BASE_URL . 'home');
        }
    }