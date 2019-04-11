<?php
use libs\system\Controller;
use src\model\ServeurDao;
use src\entities\Serveur;

class ServeurController extends Controller
{
    //LOAD ADD VIEWS
    public function addServeur()
    {
        //VERIF
        if(isset($_POST['add']))
        {
            if(!empty($_POST['nomServeur']) && !empty( $_POST['nomServeur']))
            {
                //EXTRACT THE $_POST
                extract($_POST);

                //INSTANCIATION
                $serveurdao = new ServeurDao();
                $serveur = new Serveur();

                //SET THE ATTRIBUT
                $serveur->setNomServeur($nomServeur);
                $serveur->setAdripServeur($adripServeur);

                //CALL ADD METHOD
                $result = $serveurdao->addServeur($serveur);
                //
                //$data = ['resutl' => $result];
                $data = ['result' =>$result];

                //RETURN THE VIEW WITH PARAM
                //return $this->view->load("serveurs/add",$data);
                return $this->getAll();
            }
            else
            {
                $result = 'VEUILLEZ SAISIR TOUS LES CHAMPS';
                $data = ['result'=>$result];
                return $this->view->load("serveurs/add",$data);
            }
        }
        else
        {
            $data = ['result'=>''];
            //RETURN THE VIEW WITHOUT PARAM
            return $this->view->load("serveurs/add",$data);
        }
    }
    //=============== END OF ADDCONTROLLER ============

    //LOAD LIST
    public function getAll()
    {
        $serveurdao = new ServeurDao();
        $serveurs = $serveurdao->findAll();
        $data = ['message' => "Bienvenu", 'serveurs' =>$serveurs];
        return $this->view->load("serveurs/getAll",$data);
    }


    //DELETE
    public function delete($id)
    {
        //INSTANCIATION DES CLASSES
        $serveurdao = new ServeurDao();
        $serveur = new Serveur();
        $serveur->setId($id);
        $result = $serveurdao->delete($serveur);
       
        return  header('location:http://localhost/parcInfo/serveur/getAll');;
    }

    //EDIT VIEW
    public function edit($id)
    {
        //INSTANCIATION
        $serveurdao = new ServeurDao();
        $serveur = new Serveur();
        $serveur->setId($id);
        $serveurs = $serveurdao->findOne($serveur);
        $data = ['message' => "Bienvenu", 'serveurs' =>$serveurs];
        return $this->view->load("serveurs/edit",$data);
    }

    //EDIT FUNCTION
    public function editServeur()
    {
        if(isset($_POST['update']))
        {
            if(!empty($_POST['nomServeur']) && !empty( $_POST['adripServeur']))
            {
                //EXTRACT THE $_POST
                extract($_POST);

                //INSTANCIATION
                $serveurdao = new ServeurDao();
                $serveur = new Serveur();

                //SET THE ATTRIBUT
                $serveur->setId($idServeur);
                $serveur->setNomServeur($nomServeur);
                $serveur->setAdripServeur($adripServeur);

                //CALL ADD METHOD
                $result = $serveurdao->editServeur($serveur);
                //
                //$data = ['resutl' => $result];
                $data = ['result' =>$result];

                //RETURN THE VIEW WITH PARAM
                //return $this->view->load("serveurs/add",$data);
                return $this->getAll();
            }
            else
            {
                $result = 'VEUILLEZ SAISIR TOUS LES CHAMPS';
                $data = ['result'=>$result];
                return $this->view->load("serveurs/add",$data);
            }
        }
    }

}
