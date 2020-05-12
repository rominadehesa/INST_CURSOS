<?php
    require_once 'libs/Smarty.class.php';
class CoursesView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }
    
    public function home(){
        $this->smarty->display('home.tpl');   
    }

    public function viewAreas($areas){
        $this->smarty->assign('arreglo', $areas);
        $this->smarty->display('showAreas.tpl');
    }

    public function viewCoursesOfArea($cursos){
        
        $this->smarty->assign('arreglo', $cursos);
        $this->smarty->display('showCoursesOfArea.tpl');
    }

    public function viewAllCourses($cursos){
        
        $this->smarty->assign('cursos', $cursos);
        $this->smarty->display('showAllCourses.tpl');
        
    }

    public function viewDetails($detalle){
        
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->display('showDetails.tpl');
        
    }

}