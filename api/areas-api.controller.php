<?php
require_once 'models/areas.model.php';

class AreasApiController{

    private $model;
    private $view;

    public function __construct(){

        $this->model = new AreasModel();
        $this->view= new APIview();
        
    }

    public function getAreas(){
        $areas=$this->model->getAllAreas();
        $this->view->response($areas);
    }

}