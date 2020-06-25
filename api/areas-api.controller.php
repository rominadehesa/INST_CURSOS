<?php
require_once 'models/areas.model.php';
//require_once 'models/comments.model.php';
require_once 'api/api.view.php';

class AreasApiController{
//class CommentsApiController
    private $model;
    private $view;

    public function __construct(){

        $this->model = new AreasModel();
        //$this->model = new CommentsModel();
        $this->view= new APIview();
        
    }

    public function getAreas(){
        $areas=$this->model->getAllAreas();
        //var_dump($areas); 
        $this->view->response($areas, 200);
    }
    
    public function getArea($params = []) {
        $id = $params[':ID'];

        $area = $this->model->getArea($id);
        if ($area)
            $this->view->response($area, 200);
        else
            $this->view->response("no existe area con id {$id}", 404);
    }

    public function deleteArea($params = []){
        $id = $params[':ID'];
        $area = $this->model->getArea($id);

         // verifico que exista
         if (empty($area)) {
            $this->view->response("no existe area con id {$id}", 404);
            die();
        }

        // si existe la elimina
        $this->model->delete($id);
        $this->view->response("La tarea con id {$id} se eliminó correctamente", 200);

    }
}