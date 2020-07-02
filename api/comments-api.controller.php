<?php
    require_once 'models/comments.model.php';
    require_once 'models/users.model.php';
    require_once 'api/api.view.php';
    require_once 'helpers/auth.helper.php';

    class CommentsApiController{
        private $model;
        private $view;
        private $data;
        private $modelUser;

        public function __construct(){
            $this->model = new CommentsModel();
            $this->view= new APIview();
            $this->data = file_get_contents("php://input");
            $this->modelUser = new UserModel;
            
        }

        public function getData() {
            return json_decode($this->data);
        }
        
        public function addComment($params = []) {
            // devuelve el objeto JSON enviado por POST     
            $body = $this->getData();
            
            $comentario = $body->comentario;
            $puntuacion = $body->puntuacion;
            $id_usuario_fk = $this->getIdUser(); 
            $id_curso_fk = $params[':ID'];

            $x = $this->model->insert($comentario, $puntuacion, $id_usuario_fk, $id_curso_fk); 

            if ($x){
            $this->view->response("Se agrego el comentario", 200);
            } else{
            $this->view->response("No se puedo agregar el comentario", 500);
            }
        }

        public  function getIdUser(){
            $username = HelperAuth::userLogged();
            $user = $this->modelUser->getUser($username); 
            return $user->id_usuario;
        }
    
        public function getComments($params = []){
            $id = $params[':ID'];
            $comentarios=$this->model->getAll($id);
            //var_dump($areas); 
            $this->view->response($comentarios, 200);
        }

        public function gettodo(){
            $comentarios=$this->model->getprueba();
            //var_dump($areas); 
            $this->view->response($comentarios, 200);
        }

        public function getAverage($params = []){
            $id = $params[':ID'];
            $comentarios=$this->model->getAll($id);
            $suma = 0; 
            $contador = 0;
            foreach($comentarios as $comment){
                $suma += $comment->puntuacion; 
                $contador ++; 
            }

            $promedio = $suma/$contador;
            var_dump($promedio);
            return $promedio;
        }

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