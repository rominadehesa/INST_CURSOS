<?php
    require_once 'libs/Smarty.class.php';
class CoursesView{

    private function encabezado(){
        $smarty = new Smarty(); 
        $smarty->assign('base_url', BASE_URL);
        $smarty->assign('titulo', "IDC - Cursos");
        $smarty->assign('home', "Home");
        $smarty->assign('areas', "Areas");
        $smarty->assign('cursos', "Todos los cursos");
        $smarty->assign('administrador', "Administrador");
        $smarty->display('head.tpl');

    }

    public function home(){
        echo $this->encabezado(); //consultar
        $smarty = new Smarty(); 
        $smarty->display('home.tpl');   
    }

    public function viewAreas($areas){
        echo $this->encabezado();
        $smarty = new Smarty(); 
        $smarty->assign('areas', "Areas");
        $smarty->assign('arreglo', $areas);
        $smarty->assign('btn', "Ver cursos");
    
        $smarty->display('showAreas.tpl');
        
    }

    public function viewCoursesOfArea($cursos){
        echo $this->encabezado();
        $smarty = new Smarty(); 
        
        $smarty->assign('arreglo', $cursos);
        $smarty->assign('btn', "Detalles");
        $smarty->assign('text', " meses de duracion");
        $smarty->display('showCoursesOfArea.tpl');


    }

    public function viewAllCourses($cursos){
        echo $this->encabezado();

        $smarty = new Smarty(); 
        $smarty->assign('cursos', $cursos);
        $smarty->assign('btn', "Detalles");
        $smarty->assign('text', " meses de duracion");
        $smarty->display('showAllCourses.tpl');
        
    }

    public function viewDetails($detalle){
        echo $this->encabezado();
        $smarty = new Smarty(); 
        
        $smarty->assign('detalle', $detalle);
        $smarty->assign('a', "Curso: ");
        $smarty->assign('b', "Area: ");
        $smarty->assign('c', " meses de duracion");
        $smarty->display('showDetails.tpl');
        
    }

}