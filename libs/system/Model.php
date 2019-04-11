<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 05/04/2019
 * Time: 09:14
 */
namespace libs\system;

class Model
{
    protected $db;
    public function __construct()
    {
        require_once "Database.php";
        $this->db = \Database::getConnection(); // CETTE VARIABLE EST RECUPEREE LORS DE L'INCLUSION DE bootstrap.php
    }
}