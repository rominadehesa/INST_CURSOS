<?php
    class HelperAuth {

        //Verifica que exista un usuario logueado
        static public function checkUserLogged() {
            session_start(); 
            if (!isset($_SESSION['IS_LOGGED'])) {
                header('Location: ' . BASE_URL . 'login');
                die();
            }
        }
    }
