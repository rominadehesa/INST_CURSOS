<?php
    require_once 'controllers/courses.controller.php';
    require_once 'controllers/home.controller.php';
    require_once 'controllers/areas.controller.php';
    require_once 'controllers/admin.controller.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);
  
    switch ($parametros[0]) {
        case 'home':
            $controller = new HomeController(); 
            $controller-> showHome();
        break;
        case 'areas':
            $controller = new AreasController();
            $controller-> showAreas();
        break;
        case 'cursos':
            $controller = new CoursesController();
            $controller-> showAllCourses();
        break;
        case 'cursosporarea':
            $controller = new CoursesController(); 
            $controller->coursesOfArea($parametros[1]);
        break;
        case 'detalles':
            $controller = new CoursesController(); 
            $controller->showDetailsCourse($parametros[1]);
        break;
        case 'admin':
            $controller = new AdminController();
            $controller->showFormLog();
        break;
        case 'logIn';
            $controller = new AdminController();
            $controller->showConfiguration();
        break;
        default: 
            echo "404 not found";
        break;
    }