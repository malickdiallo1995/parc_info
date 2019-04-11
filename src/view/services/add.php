<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../src/public/css/bootstrap.min.css">
        <title>Add Srvice</title>
    </head>

    <body>
        <div class="navbar navbar-default">
            <ul class ="nav navbar-nav">
                <li> <a href="/parcInfo/serveur/getAll"> Liste des Serveur </a></li>
                <li> <a href="/parcInfo/serveur/addServeur"> Ajout de Service </a></li>
                <li> <a href="/parcInfo/service/getAll"> Liste des Services </a></li>
            </ul>
        </div>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading"> Formulaire d'ajout de Service</div>
                <div class="panel-body">
                    <form method="POST" action="addService">
                        <div class="form-group">
                            <label class="control-label">Nom Service</label>
                            <input class="form-control" type="text" name="nomService">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Serveur</label>
                                <select class="form-control"  name="idServeur"> 
                                    <option value=""> Faite un Choix</option>                    
                                    <?php
                                        foreach($data['serveurs'] as $serveur)
                                        {
                                           echo" <option value='$serveur[0]'> $serveur[1]</option>";

                                        }

                                        ?>
                                </select>
				        </div>

                        <div class="col-sm-6 col-sm-offset-4">
                            <input class="btn btn-success" type="submit" value="Envoyer" name="add" />
                            <input class="btn btn-warning" type="reset" value="Annuler" name="annuler" />

                        </div>
                    </form>                 
                </div>
                <?php
                        if ($data['result'] != null) 
                        {
                            if($data['result'] === 'INSERTION REUSSIT !')
                            {
                        ?>

                                <div class="alert alert-info" role="alert" style="width: 100%; ">
                                    <?php echo  $data['result']; ?>
                                </div>
                                <?php
                            }
                            else{

                            ?>
                            
                                <div class="alert alert-danger" role="alert" style="width: 100%; ">
                                    <?php echo  $data['result']; ?>
                                </div>
                            <?php }?>
                    
                        <?php }?>
            </div>
        </div> 
    </body>

</html>