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
        case 'courses':
            $controller = new CoursesController();
            $controller->showAllCourses();
        break;
        case 'cuoursesbyarea':
            $controller = new CoursesController(); 
            $controller->coursesOfArea($parametros[1]);
        break;
        case 'details':
            $controller = new CoursesController(); 
            $controller->showDetailsCourse($parametros[1]);
        break;
        // acciones de autentificacion de usuarios
        case 'login':
            $controller = new AutController();
            $controller->showLogin();
        break;
        case "logout": 
            $controller = new AutController();
            $controller->logout();
        break;

        case 'verify':
            $controller = new AutController();
            $controller->verification();
        break;
        //acciones privadas (configuracion)
        case 'administer':
            $controller = new AdminController();
            $controller->administration();
        break;
        // ABM areas - BAJA
        case 'deletearea':
            $controller = new AdminController();
            $controller->deleteArea($parametros[1]);
        break;
        // ABM areas - MODIFICACION
        case 'editarea':
            $controller = new AdminController();
            $controller->showFormEditArea($parametros[1]);
        break;
        case 'renamearea': 
            $controller = new AdminController();
            $controller->editArea();
        break;
            // ABM areas - ALTA
        case 'newarea':
            $controller = new AdminController();
            $controller->showFormAddArea();
        break;
        case 'addarea':
            $controller = new AdminController();
            $controller->addArea();
        break;

        

        // ABM cursos - ALTA 
        case 'newcourse':
            $controller = new AdminController();
            $controller->showFormAddCourse();
        break;
        case 'addcourse':
            $controller = new AdminController();
            $controller->addCourse();
        break;
        // ABM cursos - BAJA
        case 'deletecourse':
            $controller = new AdminController();
            $controller->deleteCourse($parametros[1]);
        break;
        // ABM cursos - MODIFICACION
        case 'editcourse':
            $controller = new AdminController();
            $controller->showFormEditCourse($parametros[1]);
        break;
        case 'renamecourse':
            $controller = new AdminController();
            $controller->editCourse();
        break;
        default: 
            echo "404 not found";
        break;
    }