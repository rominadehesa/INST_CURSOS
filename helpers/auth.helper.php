<?php
    class HelperAuth {

        static private function start() {
            if (session_status() != PHP_SESSION_ACTIVE)
                session_start();
        }

        //Verifica que exista un usuario logueado
        static public function checkUserLoggedAdmin() {
            self::start();  
            if (!isset($_SESSION['IS_LOGGED']) || ($_SESSION ['PERMISSION']!=1)) {

                header('Location: ' . BASE_URL . 'login');
                die();
            }
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
