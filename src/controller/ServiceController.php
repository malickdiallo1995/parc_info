<?php
use libs\system\Controller;
use src\model\ServiceDao;
use src\model\ServeurDao;
use src\entities\Serveur;
use src\entities\Service;

class ServiceController extends Controller
        {
            //LOAD LIST
            public function getAll()
            {
                $servicedao = new ServiceDao();
                $serveurdao = new ServeurDao();
                $services = $servicedao->findAll();
                
                //PARCOUR DU TABLEAU CONTENANT LES SERVERS
                foreach ($services as $service) 
                {
                    $service =  $service['idServeur'];                  
                }
                $serveur = new Serveur();
                $serveur->setId($service);
                $serveur = $serveurdao->findOne($serveur); 

                $data = ['services'=>$services];
                //$data = array_merge($services,$serveur);
                return $this->view->load("services/getAll",$data);
            }

            //LOAD VIEWS
            public function addService()
            {
                //VERIF
                if(isset($_POST['add']))
                {
                    if(!empty($_POST['nomService']) && !empty( $_POST['idServeur']))
                    {
                        //EXTRACT THE $_POST
                        extract($_POST);
        
                        //INSTANCIATION
                        $servicedao = new ServiceDao();
                        $service = new Service();
        
                        //SET THE ATTRIBUT
                        $service->setNomService($nomService);
                        $service->setIdServeur($idServeur);                       
        
                        //CALL ADD METHOD
                        $result = $servicedao->addService($service);
                        
                        //CHARGING DATA
                        $data = ['result' =>$result];
        
                        //RETURN THE VIEW WITH PARAM
                        //return $this->view->load("serveurs/add",$data);
                        return $this->getAll();
                    }
                    else
                    {
                        $result = 'VEUILLEZ SAISIR TOUS LES CHAMPS ';
                        $data = ['result'=>$result];
                        $serveurdao = new ServeurDao();                                                      
                        $serveur = $serveurdao->findAll();                         
                        $data = ['serveurs' => $serveur, 'result'=>$result];                  
                        return $this->view->load("services/add",$data);
                    }
                }
                //DEFAULT VIEW CHARGEMENT
                else
                {    
                    //CALL LIST OF SERVER               
                    $serveurdao = new ServeurDao();                                                      
                    $serveur = $serveurdao->findAll(); 
                    $data = ['serveurs' => $serveur, 'result'=>''];
                    return $this->view->load("services/add",$data);
                }
            }
        }
    