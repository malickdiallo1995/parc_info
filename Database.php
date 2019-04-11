<?php

class Database 
{
    public static function getConnection() {
        $host = 'localhost';
        $dbname = 'jee_parc_info';
        $user = 'root';
        $password = '';
        
        $dsn = "mysql:/host=$host;dbname=$dbname";
       // 'mysql:host=192.168.180.40;dbname=requiz', 'root', 'Expresso2015'
        try {
            $db = new PDO($dsn, $user, $password);
        } catch (Exception $ex) {
            die("Error : ". $ex->getMessage());
        }
        
        return $db;
    }
}