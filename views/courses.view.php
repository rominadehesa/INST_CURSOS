<?php

class CoursesView{

    private function encabezado(){

        $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <base href="' . BASE_URL . '">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <title>IDC</title>
            </head>
            <body>';

        return $html;
    }

    public function nav(){
        echo '
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"> IDC - Cursos </a>
        <form action="home" method="get">
        <a class="btn btn-outline-dark" href="home"> Home </a>
        </form>
        <form action="areas" method="get">
        <a class="btn btn-outline-dark" href="areas"> Areas </a>
        </form>
        <form action="cursos" method="get">
        <a class="btn btn-outline-dark" href="cursos"> Todos los cursos </a>
        </form>
        <form action="admin" method="get">
        <a class="btn btn-outline-dark" href="admin"> Administrador </a>
        </form>
        </nav>'; 
    }

    public function home(){
        echo $this->encabezado();
        echo $this->nav();
    }

    public function viewAreas($areas){
        echo $this->encabezado();
        echo $this->nav();

        echo '<ul class="list-group">
        <li class="list-group-item list-group-item-info border border-dark">Areas</li>';

        echo '<form method="get" action="cursosporarea">';
           
        foreach($areas as $area){
            $id = $area->id_area;
            echo '
            <li class="list-group-item">    '.$area->area.'     <a class="btn btn-light" 
            href="cursosporarea/'.$id.'">Ver Cursos</a></li>
            </form>';
        }

        echo ' </ul>';
    }

    public function viewCoursesOfArea($cursos){
        echo $this->encabezado();
        echo $this->nav(); 

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
        echo $this->nav(); 

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
        echo $this->nav();

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