<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EleveDao
 *
 * @author Administrateur
 */
namespace src\model;


use src\entities\Eleve;

class EleveDao extends \libs\system\Model {
   
    public function insert(Eleve $eleve) {
        $sql = "INSERT INTO eleve (nom, prenom) VALUES(:nom, :prenom)";
        $stm = $this->db->prepare($sql);
        
        $stm->bindValue(':nom', $eleve->getNom());
        $stm->bindValue(':prenom', $eleve->getPrenom());
        
        $exe = $stm->execute();
        
        if($exe) {
            return $result = "Insertion réussi !";
        }
        else {
            return $result = "Echec d'insertion !";
        }
    }
    
    public function findAll() {
        $sql = "SELECT * FROM eleve";
        $exe = $this->db->query($sql);
       if($exe) {
            $data = [];
         while ($donnee = $exe->fetch()) {
                $data[] = $donnee;
            }     
            return $data;
       }
       else {
          return $data  = "Erreur execution de la requete ! ";
       }
        
    }


    public function delete(Eleve $eleve)
    {
            $sql = "DELETE FROM eleve WHERE id=".$eleve->getId();
            $exe = $this->db->query($sql);
            if($exe)
            {
                return $data = "Suppression reussit";
            }
            else
            {
                return $data = "echec suppression";
            }
    }
}
