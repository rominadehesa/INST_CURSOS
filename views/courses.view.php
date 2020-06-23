<?php
    require_once('base.view.php');
    require_once('helpers/auth.helper.php');
    class CoursesView extends View {

    public function __construct(){
        parent::__construct();
        $username = HelperAuth::userLogged();
        $this->getSmarty()->assign('username', $username);
    }

    //vista del home
    public function ViewHome(){
        $this->getSmarty()->display('home.tpl');
    }
    //DEFAULT -> ERROR 404
    public function viewError($msj = null){
        $this->getSmarty()->assign("error", $msj);
        $this->getSmarty()->display('error.tpl');
    }

    //vista de cursos por area
    public function viewCoursesOfArea($cursos){
        $this->getSmarty()->assign('arreglo', $cursos);
        $this->getSmarty()->display('showCoursesOfArea.tpl');
    }

    //vista de todos los cursos
    public function viewAllCourses($cursos){
        $this->getSmarty()->assign('cursos', $cursos);
        $this->getSmarty()->display('showAllCourses.tpl');
    }

    //vista de los detalles de un curso 
    public function viewDetails($detalle){
        $this->getSmarty()->assign('detalle', $detalle);
        $this->getSmarty()->display('showDetails.tpl');
    }
}
