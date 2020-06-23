<?php
    require_once('base.view.php');
    require_once('helpers/auth.helper.php');
    class AdminView extends View{


        public function __construct(){
            parent::__construct();
            $username = HelperAuth::userLogged();
            $this->getSmarty()->assign('username', $username);
        }

        //Vista administrador
        public function viewConfiguration($areas, $cursos){
            $this->getSmarty()->assign('arrayareas', $areas);
            $this->getSmarty()->assign('arraycursos', $cursos);
            $this->getSmarty()->display('admin.configuration.tpl');
        }

        //Vista de ABM de areas

        //Vista para agregar una area
<<<<<<< HEAD
        public function viewFormArea(){
            $this->getSmarty()->display('admin.formaddarea.tpl');
=======
        public function viewFormArea($error=null){
            $this->smarty->assign('error', $error);
            $this->smarty->display('admin.formaddarea.tpl');
>>>>>>> b035fe49baaf5095c28a5db272209e3b38684105
        }

        //vista para editar una area
        public function viewFormEditArea($areas){
            $this->getSmarty()->assign('arreglo', $areas);
            $this->getSmarty()->display('admin.formEditArea.tpl');
        }

        //Vista de ABM de cursos
        
        //Vista para agregar un curso
        public function viewFormCourse($areas){
            $this->getSmarty()->assign('areas', $areas);
            $this->getSmarty()->display('admin.formaddcourse.tpl');
        }
        //vista para editar un curso 
        public function viewFormEditCourse($areas, $curso){
            $this->getSmarty()->assign('curso', $curso);
            $this->getSmarty()->assign('arreglo', $areas);
            $this->getSmarty()->display('admin.formEditCourse.tpl');
        }
        
    }