<?php


    namespace src\entities;
    class Serveur
        {
            private $id;
            private $nomServeur;
            private $adripServeur;


            public function __construct()
            {
                
            }

            function getId() {
                return $this->id;
            }
            
            function getNomServeur() {
                return $this->nomServeur;
            }

            function getAdripServeur() {
                return $this->adripServeur;
            }

            function setId($id) {
                $this->id = $id;
            }

            function setNomServeur($nomServeur) {
                $this->nomServeur = $nomServeur;
            }

            function setAdripServeur($adripServeur) {
                $this->adripServeur = $adripServeur;
            }
        
        
            


        }