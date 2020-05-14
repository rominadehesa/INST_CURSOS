<?php
    require_once 'libs/Smarty.class.php';
class AdminView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }

    public function viewConfiguration($areas, $cursos){

        $this->smarty->assign('arrayareas', $areas);
        $this->smarty->assign('arraycursos', $cursos);

        $this->smarty->display('admin.configuration.tpl');
    }
    public function viewFormArea(){

        $this->smarty->display('formaddarea.tpl');

    }
}