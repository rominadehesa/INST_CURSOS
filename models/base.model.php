<?php
class Model {

    private $db;

    public function __construct() {
        // 1. abro la conexión con MySQL 
        $this->db = $this->createConection();
    }

    public function getDb(){
        return $this->db;
    }

    public function createConection() {
        $host = 'localhost'; 
        $userName = 'root'; 
        $password = '';
        $database = 'db_cursos'; // nombre de la base de datos
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
        return $pdo;
    }
}
