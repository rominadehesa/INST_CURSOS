<?php

require_once 'libs/Router/Router.php';
require_once 'api/comments-api.controller.php';

//creo el ruteador
$router= new Router();

//creo la tabla de ruteo

$router->addRoute('comments', 'GET', 'CommentsApiController', 'getComments'); //trae todos los comentarios
$router->addRoute('comments/:ID', 'GET', 'CommentsApiController', 'getComment'); //trae un comentario
$router->addRoute('comments/:ID', 'DELETE', 'CommentsApiController', 'deleteComment'); //borra un comentario
$router->addRoute('comment', 'POST', 'CommentsApiController', 'addComment'); //postear un comentario
// rutea
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);
