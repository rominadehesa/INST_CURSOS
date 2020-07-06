<?php
//Controllador para el Administrador
    require_once 'views/admin.view.php';
    require_once 'models/areas.model.php'; 
    require_once 'models/courses.model.php';
    require_once 'models/users.model.php';
    require_once 'helpers/auth.helper.php';


    class AdminController {

        private $modelAreas;
        private $modelCourses;
        private $modelUsers; 
        private $view; 

        public function __construct(){
            $this->modelAreas = new AreasModel;
            $this->modelCourses = new CoursesModel;
            $this->modelUsers = new UserModel;
            $this->view = new AdminView;
            HelperAuth::checkUserLoggedAdmin(); // antes de ejecutar las funciones de este controlador, va a verificar que el usuario este logueado 
        }

        //configuracion general
        public function administration(){
            $areas = $this->modelAreas->getAllAreas();
            $cursos = $this->modelCourses->getAllCourses();
            $this->view->viewConfiguration($areas, $cursos); 
        }

        // ABM AREAS

        //muestra el formulario para agregar una area
        public function showFormAddArea(){
            $this->view->viewFormArea();
        }
        
        //agrega un area
        public function addArea(){
            $area=$_POST['x'];
            if(!empty($area)){
                $this->modelAreas->insertArea($area);
                header('Location: ' . BASE_URL . "administer");
            }
            else {
                $this->view->viewFormArea('Complete todos los campos');
            }
        }

        //eliminar area
        public function deleteArea($id){
            $this->modelAreas->delete($id);
            header('Location: ' . BASE_URL . "administer");
        }
        //muestra el formulario para modificar un area

        public function showFormEditArea($id){
            $areas=$this->modelAreas->getArea($id);
            $this->view->viewFormEditArea($areas);
        }

        //edita un area

        public function editArea(){
            $area = $_POST['x'];
            $id = $_POST['id'];
            $areas=$this->modelAreas->getArea($id);
            if (!empty($area)){
            $this->modelAreas->edit($area, $id); 
            header('Location: ' . BASE_URL . "administer"); 
            } else {
                $this->view->viewFormEditArea($areas, "Campos incompletos");
            }
        }

        // ABM CURSOS

        //muestra el formulario para agregar un curso

        public function showFormAddCourse(){
            $areas=$this->modelAreas->getAllAreas();
            $this->view->viewFormCourse($areas);
        }

        //agrega un curso

        public function addCourse(){
            $curso=$_POST['curso']; 
            $descripcion=$_POST['descripcion'];
            $duracion=$_POST['duracion']; 
            $idarea=$_POST['id_area'];
            $areas=$this->modelAreas->getAllAreas();

            if(empty($curso) || empty($descripcion)|| empty($duracion)){
                $this->view->viewFormCourse($areas, "Campos incompletos");
            }
            else{
                if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" |
                $_FILES['input_name']['type'] == "image/png"){
                    $success = $this->modelCourses->insertCourse($curso, $descripcion, 
                    $duracion, $idarea, $_FILES['input_name']['tmp_name'], $_FILES['input_name']['name']);
                }else {
                    $success = $this->modelCourses->insertCourse($curso, $descripcion, 
                    $duracion, $idarea);
                }
        
                if($success) {
                    header('Location: ' . BASE_URL . "courses");
                } else {
                    $this->view->viewFormCourse($areas, "Campos incompletos");
                }
            }    
        }

        //eliminar curso

        public function deleteCourse($id){
            $this->modelCourses->delete($id);
            header('Location: ' . BASE_URL . "administer");
        }
        //muestra el formulario para editar un curso

        public function showFormEditCourse($id){
            $curso = $this->modelCourses->getCourse($id);            
            $areas = $this->modelAreas->getAllAreas();
            $this->view->viewFormEditCourse($areas, $curso);
        }

        // edita un curso
        public function editCourse(){
            $idcurso = $_POST['idcurso'];
            $curso = $_POST['curso'];
            $descripcion = $_POST['descripcion'];
            $duracion = $_POST['duracion'];
            $idarea = $_POST['idarea'];
            $areas = $this->modelAreas->getAllAreas();
            $cursos = $this->modelCourses->getCourse($idcurso);
            $imagen = $_FILES['input_name']['error'];

            //si no edita la imagen, deja la que estaba
            if (empty($curso) || empty($descripcion) || empty($duracion)){
                $this->view->viewFormEditCourse($areas, $cursos, "Campos incompletos");
            } 
            else if ($imagen == 4){
                $this->modelCourses->editNotImg($idcurso, $curso, $descripcion, $duracion, $idarea);
                header('Location: ' . BASE_URL . "administer");
            }
            else{
                if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png"){
                    $success = $this->modelCourses->edit($idcurso, $curso, $descripcion, $duracion, $idarea, $_FILES['input_name']['tmp_name'], $_FILES['input_name']['name']);
                }
                else{
                    $success=$this->modelCourses->edit($idcurso, $curso, $descripcion, $duracion, $idarea);
                }
         
                if($success) {
                    header('Location: ' . BASE_URL . "courses");
                } else {
                    $this->view->viewFormEditCourse($areas, $cursos, "Campos incompletos");
                }
            }
        }   

        // borrar la imagen
        public function deleteImg($id){
            $areas = $this->modelAreas->getAllAreas();
            $cursos = $this->modelCourses->getCourse($id);
            $dlt = $this->modelCourses->deleteImagen($id);
            
            if($dlt){
                unlink($cursos->imagen);
                header('Location: ' . BASE_URL . "administer");
            } 
            else {
                $this->view->viewFormEditCourse($areas, $cursos, "no se puedo eliminar la imagen");
            }
        }

        //ABM usuarios
        //mostrar todos los usuarios en dos grupos(administridores y no administradores)

        public function showUsers(){
            $permission = true;
            $notpermission = false; 
            $usersadmin = $this->modelUsers->getAdministrators($permission); 
            $usersnotadmin= $this->modelUsers->getNotAdministrators($notpermission);
            $this->view->viewUsers($usersadmin, $usersnotadmin); 
        }

        //quitar permiso de administrador  
        public function removePermission($id){
            $this->modelUsers->offPermission($id);
            header('Location: ' . BASE_URL . "users");
            
        }

        //dar permiso de administrador

        public function givePermission($id){
            $this->modelUsers->onPermission($id);
            header('Location: ' . BASE_URL . "users");
        }

        //borrar un usuario
        public function deleteUser($id){
            $this->modelUsers->delete($id);
            header('Location: ' . BASE_URL . "users");
        }
    }