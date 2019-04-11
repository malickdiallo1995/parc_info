<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Eleve
 *
 * @author Administrateur
 */
namespace src\entities;

class Eleve {
    private $_id;
    private $_nom;
    private $_prenom;
    
    public function __construct() {
        
    }
    
    function getId() {
        return $this->_id;
    }

    function getNom() {
        return $this->_nom;
    }

    function getPrenom() {
        return $this->_prenom;
    }

    function setId($id) {
        $this->_id = $id;
    }

    function setNom($nom) {
        $this->_nom = $nom;
    }

    function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }


}
