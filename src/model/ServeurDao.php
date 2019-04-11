<?php

    namespace src\model;

    use src\entities\Serveur;
    use libs\system\Model;

    class ServeurDao extends Model
        {
          
            //ADD NEW SERVER
            public function addServeur(Serveur $serveur)
            {
                //REQUETE
               
                $sql = " INSERT INTO `serveur` (`idServeur`, `nomServeur`, `adripServeur`) VALUES (NULL,:nomServeur, :adripServeur)";
                //PREPARE REQUETE
                $stm = $this->db->prepare($sql);

                //BIND PARAM
                $stm->bindValue(':nomServeur', $serveur->getNomServeur());
                $stm->bindValue(':adripServeur', $serveur->getAdripServeur());

                //EXECUT REQUETE
                $exe = $stm->execute();

                //VERIFICATION ON THE EXECUION
                if($exe)
                {
                    return $result = "INSERTION REUSSIT !";
                }
                else
                {
                    return $result = "ECHEC DE L'INSERTION!";
                }

            }
            //============== END ADD SERVEUR ===============

            //EDIT SERVER
            public function editServeur(Serveur $serveur)
            {
                    $sql ="UPDATE `serveur` SET `nomServeur` = :nomServeur, `adripServeur` = :adripServeur WHERE `serveur`.`idServeur` =".$serveur->getId();
                    
                    $stm = $this->db->prepare($sql);

                    //BIND PARAM
                    $stm->bindValue(':nomServeur', $serveur->getNomServeur());
                    $stm->bindValue(':adripServeur', $serveur->getAdripServeur());

                     //EXECUT REQUETE
                     $exe = $stm->execute();

                    //VERIFICATION ON THE EXECUION
                    if($exe)
                    {
                        return $result = "MODIFICATION REUSSIT !";
                    }
                    else
                    {
                        return $result = "ECHEC DE LA MODIFICATION!";
                    }


            }

            //LIST OF SERVER
            public function findAll()
            {
                //QUERY
                $sql = "SELECT * FROM serveur";

                //EXECUTION
                $exe = $this->db->query($sql);

                //VERIFICATION
                if($exe)
                {
                   //TABLE OF DATA
                    $data = [];
                    //CHARGE THE TABLE OF DATA
                    while($donnee = $exe->fetch())
                    {
                        $data[] = $donnee;
                    }
                    return $data;
                }
                else
                {
                    return $data = "ERREUR LORS DE L'EXECUTION DE LA REQUETE";
                }               
            }
            //============= END OF LIST SERVER ===========

            public function delete(Serveur $serveur)
            {
                //Query
                $sql = "DELETE FROM serveur WHERE idServeur=".$serveur->getId();
                //EXECUT
                $exe = $this->db->query($sql);

                //VERIF
                if($exe)
                {
                    return $data = "SUPPRESSION REUSSIT !";
                }
                else
                {
                    return $data = "ECHEC SUPPRESSION";
                }
            }

            public function findOne(Serveur $serveur)
            {
                  //QUERY
                  $sql = "SELECT * FROM serveur WHERE idServeur=".$serveur->getId();

                  //EXECUTION
                  $exe = $this->db->query($sql);
  
                  //VERIFICATION
                  if($exe)
                  {
                     //TABLE OF DATA
                      $data = [];
                      //CHARGE THE TABLE OF DATA
                      while($donnee = $exe->fetch())
                      {
                          $data[] = $donnee;
                      }
                      return $data;
                  }
                  else
                  {
                      return $data = "ERREUR LORS DE L'EXECUTION DE LA REQUETE";
                  }               
            }
            
        }
