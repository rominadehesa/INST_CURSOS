<?php

require_once 'libs/Router/Router.php';
require_once 'api/areas-api.controller.php';
//require_once 'api/comments-api.controller.php';

//creo el ruteador
$router= new Router();

//creo la tabla de ruteo
$router->addRoute('areas', 'GET', 'AreasApiController', 'getAreas'); 
$router->addRoute('areas/:ID', 'GET', 'AreasApiController', 'getArea');

//$router->addRoute('comments', 'GET', 'CommentsApiController', 'getComments');
//$router->addRoute('comments/:ID', 'GET', 'CommentsApiController', 'getComment');
//$router->addRoute('comments/:ID', 'DELETE', 'CommentsApiController', 'deleteComment');

// rutea
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);
