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
        

    }
