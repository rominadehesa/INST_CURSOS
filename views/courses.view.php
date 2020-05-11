<?php
 require_once 'libs/Smarty.class.php';
class CoursesView{

    private function encabezado(){
        $smarty = new Smarty(); 
        $smarty->assign('base_url', BASE_URL);
        $smarty->assign('titulo', "IDC - Cursos");
        $smarty->assign('home', "Home");
        $smarty->assign('areas', "Areas");
        $smarty->assign('cursos', "Todos los cursos");
        $smarty->assign('administrador', "Administrador");
        $smarty->display('head.tpl');

    }

    public function home(){
        echo $this->encabezado();
        $smarty = new Smarty(); 
        $smarty->display('home.tpl');   
    }

    public function viewAreas($areas){
        echo $this->encabezado();
        $smarty = new Smarty(); 
        $smarty->assign('areas', "Areas");
        $smarty->assign('arreglo', $areas);
        $smarty->assign('btn', "Ver cursos");
        $smarty->display('showAreas.tpl');
        
    }

    public function viewCoursesOfArea($cursos){
        echo $this->encabezado();
       

         $area = $cursos[0]->area; 

        echo '<ul class="list-group">
        <li class="list-group-item list-group-item-warning">
        Cursos por area: </li>';

        echo '<div class="conteiner-fluid"> <div class="row">';
        
       

        foreach ($cursos as $data) {

            echo '
            <div class="col-3">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-header list-group-item-info">'.$area.'</div>
                        <div class="card-body">
                        <h5 class="card-title">'.$data->curso.'</h5>
                        <p class="card-text">Duracion:'.$data->duracion.' meses</p>
                        <form action="detalles" method="get">
                        <a class="btn btn-outline-dark" href="detalles/'.$data->id_curso.'"> Detalles </a>
                        </form>
                        </div>
                </div>
            </div>
            
            ';
        }

        echo '</div></div>';

    }

    public function viewAllCourses($cursos){
        echo $this->encabezado();
         

        echo '<ul class="list-group">
        <li class="list-group-item list-group-item-warning border border-dark">
        Todos los cursos </li>';

        echo '<div class="conteiner-fluid"> <div class="row">';
        
       

        foreach ($cursos as $data) {

        echo '
        <div class="col-3">
            <div class="card border-light mb-3 " style="max-width: 18rem;">
                <div class="card-header">'.$data->area.'</div>
                    <div class="card-body">
                    <h5 class="card-title">'.$data->curso.'</h5>
                    <p class="card-text">Duracion:'.$data->duracion.' meses</p>
                    <form action="detalles" method="get">
                    <a class="btn btn-outline-dark" href="detalles/'.$data->id_curso.'"> Detalles </a>
                    </form>
                    </div>
            </div>
        </div>
        
        ';
        }

        echo '</div></div>';
    }

    public function viewDetails($detalle){
        echo $this->encabezado();
        

        echo '<ul class="list-group">
        <li class="list-group-item list-group-item-info">
        Area: '.$detalle->area.' </li>
        <li class="list-group-item list-group-item-warning">
        Curso: '.$detalle->curso.' </li>
        <li class="list-group-item list-group-item-light">
        '.$detalle->descripcion.' </li>
        <li class="list-group-item list-group-item-success">
        Duracion: '.$detalle->duracion.' meses</li>';
    }

}