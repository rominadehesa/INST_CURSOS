<?php 

class AdminView{

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
        <a class="btn btn-outline-dark" href="home"> Volver al Home </a>
        </form>
        </nav>'; 
    }

    public function viewFormLog(){
        echo $this->encabezado();
        echo $this->nav(); 
            
    }
    public function viewConfiguration(){
        echo $this->encabezado();
        echo $this->nav();

        echo '<ul class="list-group">
        <li class="list-group-item list-group-item-danger border border-dark"> Configuracion de Cursos </li>';

    }
    
}