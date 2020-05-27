<?php
require_once 'libs/Smarty.class.php';
class CoursesView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }

    //vista del home
    public function ViewHome()
    {
        $this->smarty->display('home.tpl');
    }

    //vista de cursos por area
    public function viewCoursesOfArea($cursos)
    {
        $this->smarty->assign('arreglo', $cursos);
        $this->smarty->display('showCoursesOfArea.tpl');
    }

    //vista de todos los cursos
    public function viewAllCourses($cursos)
    {
        $this->smarty->assign('cursos', $cursos);
        $this->smarty->display('showAllCourses.tpl');
    }

    //vista de los detalles de un curso 
    public function viewDetails($detalle)
    {
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->display('showDetails.tpl');
    }
    public function viewError()
    {
        $this->smarty->display('showError.tpl');
    }
}
