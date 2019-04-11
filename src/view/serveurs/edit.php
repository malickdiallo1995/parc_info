
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../src/public/css/bootstrap.min.css">
        <title>Add Serveur</title>
    </head>

    <body>
        <div class="navbar navbar-default">
            <ul class ="nav navbar-nav">
                <li> <a href="/parcInfo/serveur/getAll"> Liste des Serveur </a></li>
                <li> <a href="/parcInfo/service/addService"> Ajout de Services </a></li>
                <li> <a href="/parcInfo/service/getAll"> Liste des Services </a></li>
            </ul>
        </div>
        <?php
        //PARCOUR DU TABLEAU CONTENANT LES SERVERS
        foreach ($data['serveurs'] as $serveur) {
            ?>
        
        <?php
      }

    ?>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading"> Editer un Serveur</div>
                <div class="panel-body">
                    <form method="POST" action="/parcInfo/serveur/editServeur">
                        <div class="form-group">
                            <label class="control-label">ID Serveur</label>
                            <input class="form-control" type="text" name="idServeur"  value="<?php echo $serveur['idServeur'] ?>" readonly>
                        </div>¸
                        <div class="form-group">
                            <label class="control-label">Nom Serveur</label>
                            <input class="form-control" type="text" name="nomServeur" value="<?php echo $serveur['nomServeur'] ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Adresse IP Serveur</label>
                            <input class="form-control" type="text" name="adripServeur" value="<?php echo $serveur['adripServeur'] ?>">
                        </div>

                        <div class="col-sm-6 col-sm-offset-4">
                            <input class="btn btn-success" type="submit" value="Update" name="update" />
                            <input class="btn btn-warning" type="reset" value="Annuler" name="annuler" />

                        </div>
                    </form>                 
                </div>
                       
            </div>
        </div>
    </body>

</html>























