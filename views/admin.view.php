<?php
    require_once('base.view.php');
    require_once('helpers/auth.helper.php');
    class AdminView extends View{


        public function __construct(){
            parent::__construct();
        }

        //Vista administrador
        public function viewConfiguration($areas, $cursos){
            $this->getSmarty()->assign('arrayareas', $areas);
            $this->getSmarty()->assign('arraycursos', $cursos);
            $this->getSmarty()->display('admin.configuration.tpl');

        }

        //Vista de ABM de areas

        //Vista para agregar una area
        public function viewFormArea($error=null){
            $this->getSmarty()->assign('error', $error);
            $this->getSmarty()->display('admin.formaddarea.tpl');
        }

        //vista para editar una area
        public function viewFormEditArea($areas, $error=null){
            $this->getSmarty()->assign('arreglo', $areas);
            $this->getSmarty()->assign('error', $error);
            $this->getSmarty()->display('admin.formEditArea.tpl');
        }

        //Vista de ABM de cursos
        
        //Vista para agregar un curso
        public function viewFormCourse($areas, $error=null){
            $this->getSmarty()->assign('areas', $areas);
            $this->getSmarty()->assign('error', $error);
            $this->getSmarty()->display('admin.formaddcourse.tpl');
        }
        //vista para editar un curso 
        public function viewFormEditCourse($areas, $curso, $error=null){
            $this->getSmarty()->assign('curso', $curso);
            $this->getSmarty()->assign('arreglo', $areas);
            $this->getSmarty()->assign('error', $error);
            $this->getSmarty()->display('admin.formEditCourse.tpl');
        }

        //Vista configuracion de usuarios

        public function viewUsers($usersadmin, $usersnotadmin){
            $this->getSmarty()->assign('usersadmin', $usersadmin);
            $this->getSmarty()->assign('users', $usersnotadmin);
            $this->getSmarty()->display('admin.usersconfiguration.tpl');
        }
        
    }