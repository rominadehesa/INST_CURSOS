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
}