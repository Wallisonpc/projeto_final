<?php

define('name_bd', 'bdcontratar'); 
define('host_bd', 'localhost'); 
define('user_bd', 'root'); 
define('pass_db', '');

class Conexao {

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=' . host_bd . ';dbname=' . name_bd . ';charset=utf8', user_bd, pass_bd);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }

    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }

}
