<?php
    require_once 'models/comments.model.php';
    require_once 'api/api.view.php';

    class CommentsApiController{
        private $model;
        private $view;

        public function __construct(){
            $this->model = new CommentsModel();
            $this->view= new APIview();
        }

        public function getComments(){
            $comentarios=$this->model->getAll();
            //var_dump($areas); 
            $this->view->response($comentarios, 200);
        }
    
        public function getComment($params = []) {
            $id = $params[':ID'];
            $comentario = $this->model->get($id);
            if ($comentario)
                $this->view->response($comentario, 200);
            else
                $this->view->response("no existe comentario con id {$id}", 404);
        }

        public function deleteComment($params = []){
            $id = $params[':ID'];
            $comentario = $this->model->get($id);
        
            // verifico si existe ese comentario
            if (empty($comentario)) {
                $this->view->response("no existe comentario con id {$id}", 404);
                die();
            }
            // si existe elimina el comentario
            $this->model->delete($id);
            $this->view->response("El comentario con id {$id} se eliminó correctamente", 200);
        }
}