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

        //Vista para agregar una area
        public function viewFormArea(){
            $this->smarty->display('admin.formaddarea.tpl');
        }

        //vista para editar una area
        public function viewFormEditArea(){
            $this->smarty->display('admin.formeditarea.tpl');
        }

        //Vista de ABM de cursos
        
        //Vista para agregar un curso
        public function viewFormCourse($areas){
            $this->smarty->assign('areas', $areas);
            $this->smarty->display('admin.formaddcourse.tpl');
        }
        
    }