<?php
    require_once 'libs/Smarty.class.php';
    class AdminView{

        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('base_url', BASE_URL);
        }

        //Vista administrador
        public function viewConfiguration($areas, $cursos){
            $this->smarty->assign('arrayareas', $areas);
            $this->smarty->assign('arraycursos', $cursos);
            $this->smarty->display('admin.configuration.tpl');
        }

        //Vista de ABM de areas
        public function viewFormArea(){
            $this->smarty->display('admin.formaddarea.tpl');
        }

        //Vista de ABM de cursos
        public function viewFormCourse(){
            $this->smarty->display('admin.formaddcourse.tpl');
        }
    }