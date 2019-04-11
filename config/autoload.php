<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 03/04/2019
 * Time: 16:31
 */
class Autoloader
{
    static function register() {
        spl_autoload_register( array(__CLASS__, "autoload") );
    }

    static function autoload($class) {
        //echo str_replace("\\", "/",$class.".php");
        //$file_namespace, CONCERNE LES NAMESPACE
        $file_namespace = str_replace("\\", "/", $class.".php");
        if (file_exists("src/model/".$class.".php")) {
            require_once "src/model/".$class.".php";
        }
        else if (file_exists("src/controller/".$class.".php")){
            require_once "src/controller/".$class.".php";
        }
        // NAMESPACE
       if (file_exists($file_namespace)) {
            str_replace("\\", "/", $file_namespace);
            require_once $file_namespace;
        }
        else {
            die ('Merci d\'utiliser le mot clé USE avant d\'instancier la classe: '.$class);
        }
    }
}

Autoloader::register();