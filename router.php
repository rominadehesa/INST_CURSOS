<?php
    require_once 'controllers/courses.controller.php';
    require_once 'controllers/areas.controller.php';
    require_once 'controllers/aut.controller.php';
    require_once 'controllers/admin.controller.php';


    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);
  
    switch ($parametros[0]) {
        //acciones publicas de la pagina 
        case 'home':
            $controller = new CoursesController(); 
            $controller->showHome();
        break;
        case 'areas':
            $controller = new AreasController();
            $controller->showAreas();
        break;
        case 'cursos':
            $controller = new CoursesController();
            $controller->showAllCourses();
        break;
        case 'cursosporarea':
            $controller = new CoursesController(); 
            $controller->coursesOfArea($parametros[1]);
        break;
        case 'detalles':
            $controller = new CoursesController(); 
            $controller->showDetailsCourse($parametros[1]);
        break;
        // acciones de autentificacion de usuarios
        case 'login':
            $controller = new AutController();
            $controller->showLogin();
        break;
        case 'verify':
            $controller = new AutController();
            $controller->verification();
        break;
        //acciones privadas (configuracion)
        case 'administrar':
            $controller = new AdminController();
            $controller->administration();
        break;
        // ABM areas - BAJA
        case 'eliminararea':
            $controller = new AdminController();
            $controller->deleteArea($parametros[1]);
        break;
        // ABM areas - MODIFICACION

        // ABM areas - ALTA
        case 'newarea':
            $controller = new AdminController();
            $controller->showFormAddArea();
        break;
        case 'agregararea':
            $controller = new AdminController();
            $controller->addArea();
        break;

        // ABM cursos - BAJA
        case 'eliminarcurso':
            $controller = new AdminController();
            $controller->deleteCourse($parametros[1]);
        break;
        
        // ABM cursos - MODIFICACION

        // ABM cursos - ALTA 
        case 'newcurso':
            $controller = new AdminController();
            $controller->showFormAddCourse();
        break;
        case 'agregarcurso':
            $controller = new AdminController();
            $controller->addCourse();
        break;

        default: 
            echo "404 not found";
        break;
    }