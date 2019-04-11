<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EleveController
 *
 * @author Administrateur
 */

use libs\system\Controller;
use src\model\EleveDao;
use src\entities\Eleve;
class EleveController extends Controller {  
    
    public function formEleve() {
        if(isset($_POST['add'])) {
            extract($_POST);
            
            $eleveDao = new EleveDao();
            $eleve = new Eleve();
            
            $eleve->setNom($nom);
            $eleve->setPrenom($prenom);
            
            $result = $eleveDao->insert($eleve);
            $data = ['result'=> $result];
             return $this->view->load("eleves/add", $data);
        
        }
        else 
        {
            return $this->view->load("eleves/add");
        }
    }

    public function getAll() {
       
        $data = ['message'=> "Bienvenue", 'eleves'=> $eleves];
        return $this->view->load("eleves/getAll", $data);
        
        }

    public function delete($id)
    {
        $eleveDao = new EleveDao();
        $eleve = new Eleve();
        $eleve->setId($id);
        $data =  $eleveDao->delete($eleve);
         
        //$this->getAll();
        return $this->getAll();
    
    }    
         
    }

