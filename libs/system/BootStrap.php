<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 05/04/2019
 * Time: 09:15
 */
namespace libs\system;

class BootStrap
{
    public function __construct()
    {
        if(isset($_GET['url'])) 
        {
            // explode() TRANSFORME UNE CHAINE DE CARACTERES EN TABLEAU EN SUIVANT UN DELIMITEUR EX:/
            $url = explode("/", $_GET['url']);
            // ON RECUPERE LE CONTROLLER
            $controller_class = ucfirst($url[0])."Controller";
            $controller_file = "src/controller/".$controller_class.".php";
            if(file_exists($controller_file)){
                require_once $controller_file;
                $controller_object = new $controller_class();

                // METHODE AVEC PARAMETRE
                if(isset($url[2])) 
                {
                    $method = $url[1];
                    if(method_exists($controller_object, $method)){
                        $controller_object->$method($url[2]);
                    } else {
                        die($method." n'existe pas dans ".$controller_class ." !");
                    }
                }
                // METHODE SANS PARAMETRE
                else if(isset($url[1])) 
                {
                    $method = $url[1];
                    if(method_exists($controller_object, $method)) {
                        $controller_object->$method();
                    } else {
                        die($method." n'existe pas dans ".$controller_class ." !");
                    }
                }
            } else {
                die($controller_file." n'existe pas !");
            }
        } // FIN if(isset($_GET['url']))
        else 
        {
             require_once 'menu.php';
        }
    }
}