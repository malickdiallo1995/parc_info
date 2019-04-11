<?php

    namespace src\model;

    use libs\system\Model;
use src\entities\Service;

class ServiceDao extends Model
        {
           //ADD SERVICE
           public function addService(Service $service)
           {
               //REQUETE
               $sql = "INSERT INTO `service` (`idService`, `nomService`, `idServeur`) VALUES (NULL, :nomService, :serveur);";

               //PREPARE
               $stm = $this->db->prepare($sql);

               //BINDIND DATA
               $stm->bindValue(':nomService',$service->getNomService());
               $stm->bindValue(':serveur',$service->getIdServeur());

               //EXECUTE 
               $exe = $stm->execute();

               //VERFIF
               if($exe)
               {
                    return $reult = "INSERTION REUSSIT";
               }
               else
               {
                    return $reult = "ECHEC INSERTION";
               }
           } 
           //================ EN ADD ===========

           //LIST
           public function findAll()
           {
                //QUERY
                $sql = "SELECT s.*,ss.nomServeur FROM service s, serveur ss where s.idServeur=ss.idServeur";

                //EXECUTE
                $exe = $this->db->query($sql);

                //VERIF
                if($exe)
                {
                    //DECLARE ARRAY OF DATA
                    $data = [];
                    //CHARGE THE ARRAY
                    while ($donnee = $exe->fetch())
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
           //=================== END OF LIST SERVICE =========================

        }
    