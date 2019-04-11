<?php

        namespace src\entities;
        class Service
        {
                private $id;
                private $nomService;
                //private $serveur;
                private $idServeur;
                
                public function __construct()
                {
                    //$this->serveur = new Serveur;
                }

                /**
                 * Get the value of nomService
                 */ 
                public function getNomService()
                {
                                return $this->nomService;
                }

                /**
                 * Set the value of nomService
                 *
                 * @return  self
                 */ 
                public function setNomService($nomService)
                {
                                $this->nomService = $nomService;

                                return $this;
                }

                /**
                 * Get the value of id
                 */ 
                public function getId()
                {
                                return $this->id;
                }

                /**
                 * Set the value of id
                 *
                 * @return  self
                 */ 
                public function setId($id)
                {
                                $this->id = $id;

                                return $this;
                }

                /**
                 * Get the value of idServeur
                 */ 
                public function getIdServeur()
                {
                                return $this->idServeur;
                }

                /**
                 * Set the value of idServeur
                 *
                 * @return  self
                 */ 
                public function setIdServeur($idServeur)
                {
                                $this->idServeur = $idServeur;

                                return $this;
                }
        }
        