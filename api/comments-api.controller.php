<?php
    require_once 'models/comments.model.php';
    require_once 'api/api.view.php';
    require_once 'helpers/auth.helper.php';

    class CommentsApiController{
        private $model;
        private $view;
        private $data;

        public function __construct(){
            $this->model = new CommentsModel();
            $this->view= new APIview();
            $this->data = file_get_contents("php://input");
            
        }

        public function getData() {
            return json_decode($this->data);
        }
        //funcion para postear un comentario
        public function addComment($params = []) {
            // devuelve el objeto JSON enviado por POST     
            $body = $this->getData();
            
            $comentario = $body->comentario;
            $puntuacion = $body->puntuacion;
            $id_usuario_fk = $body->id_usuario_fk;
            $id_curso_fk = $params[':ID'];

            $x = $this->model->insert($comentario, $puntuacion, $id_usuario_fk, $id_curso_fk); 

            if ($x){
            $this->view->response("Se agrego el comentario", 200);
            } else{
            $this->view->response("No se puedo agregar el comentario", 500);
            }
        }
        //traemos informacion sobre los comentarios y el usuario que hace cada comentario
        //pasamos por parametros el id del curso
        public function getComments($params = []){
            $id = $params[':ID'];
            $comentarios=$this->model->getAll($id);
            $this->view->response($comentarios, 200);
        }
        //funcion para borrar comentario
        public function deleteComment($params = []){
            $id = $params[':ID'];
            $comentario = $this->model->get($id);

            if (!empty($comentario)) {
                $this->model->deleteComment($id);
                $this->view->response("El comentario con id {$id} se eliminó correctamente", 200);
    
            }
            else{
                $this->view->response("No existe comentario para eliminar con id {$id}", 404);
    
            }
        }
}