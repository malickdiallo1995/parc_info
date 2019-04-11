<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 05/04/2019
 * Time: 09:14
 */
namespace libs\system;
use libs\system\View;

// TOUT CONTROLLER DE NOTRE APPLICATION HERITERA DE CE CONTROLLER LA
class Controller
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }
}