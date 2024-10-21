<?php
require_once 'config.php';
class Model {
    protected $db;
    public function __construct() {
        $this->db = new PDO(
            "mysql:host=".MYSQL_HOST .
            ";dbname=".MYSQL_DB.";charset=utf8", 
            MYSQL_USER, MYSQL_PASS);
            $this->_deploy();
    }

    private function _deploy(){ 
        $query = $this->db->query("SHOW TABLES");
        $tablas = $query->fetchAll();

        if(count($tablas) == 0){
            $sql = file_get_contents("agencia_viajes.sql");
            $sql = <<<SQL
                $sql
            SQL;
            $this->db->query($sql);
        }
    }
}