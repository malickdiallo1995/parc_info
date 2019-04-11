<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 05/04/2019
 * Time: 09:14
 */
namespace libs\system;

class View
{
    public function __construct()
    {
    }

    // CETTE FONCTION PERMET DE CAHRGER LES FICHIER VIEWS.
    // CETTE FONCTION SERA APPELEE AVEC DES ARGUMENTS DYNAMIQUEMENT
    public function load() {
        // $num, PERMET COMPTER LE NPMBRE D'ARGUMENT PASSER EN PARAMETRE LORS DE L'APPEL DE LA FONCTION
        $num = func_num_args();
        // $args, PERMET DE RECUPERER LES ARGUMENTS (PARAMETRE) LORS DE L'APPEL DE LA FONCTION
        // EN LES STOCKANT DANS UN TABLEAU
        $args = func_get_args();
        // SI $num  = 1 => ON A INCLUT UN FICHIER (index.php)
        // SNINON SI $num = 2 => ON A INCLUT UN FICHIER VUE AVEC LES DONNEES A AFFICHER
        switch ($num) {
            case 1:
                $file = "src/view/".$args[0].".php";
                if (file_exists($file)) {
                    require_once $file;
                }
                else {
                    die($file. " n'existe pas comme vue !");
                }
            break;
            case 2:
                $file = "src/view/".$args[0].".php";
                if (file_exists($file)) {
                    $data = $args[1];
                    require_once $file;
                }
                else {
                    die($file. " n'existe pas comme vue !");
                }
                break;
        } // FIN SWITCH
    }
}