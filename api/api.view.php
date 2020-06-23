<?php

class APIview{
    public function response($array) {//devuelve un arreglo en formatp Json
        header("Content-Type: application/json");
        echo json_encode($array);
    }


}

