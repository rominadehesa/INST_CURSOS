<?php
    class HelperAuth {

        static private function start() {
            if (session_status() != PHP_SESSION_ACTIVE)
                session_start();
        }

        //Verifica que exista un usuario logueado
        static public function checkUserLoggedAdmin() {
            self::start();  
            if (!isset($_SESSION['IS_LOGGED'])) {

                header('Location: ' . BASE_URL . 'login');
                die();
            } else if (isset($_SESSION['IS_LOGGED']) && ($_SESSION ['PERMISSION']!=1)){
                header('Location: ' . BASE_URL . 'home');
                die();
            }
        }

        static public function isLogged() {
            self::start(); 
            return (isset($_SESSION['IS_LOGGED']));
        }

        static public function isAdmin() {
            self::start(); 
            if(isset($_SESSION['IS_LOGGED'])){
                return ($_SESSION['PERMISSION']);
            }
        }

        static public function idUser() {
            self::start();
            if (isset($_SESSION['USERNAME'])) {
                return $_SESSION['ID_USER'];
            }
        return false;
        }

        static public function userLogged() {
            self::start();
            if (isset($_SESSION['USERNAME'])) {
                return $_SESSION['USERNAME'];
            }
        return false;
        }

        static public function login($user) {
            self::start();
                //logueo al usuario
                $_SESSION['IS_LOGGED'] = true;
                $_SESSION['ID_USER'] = $user->id_usuario;
                $_SESSION['USERNAME'] = $user->username;
                $_SESSION['PERMISSION'] = $user->permission;
        }

        // destruye la sesion 
        static public function logout() {
            self::start();
            session_destroy();
        }

        

    }
