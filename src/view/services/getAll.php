<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../src/public/css/bootstrap.min.css">
    <title>Liste Service</title>
  </head>

  <body>
    <div class="navbar navbar-default">
      <ul class ="nav navbar-nav">
        <li> <a href="/parcInfo/serveur/addServeur"> Ajout de Serveur </a></li>
        <li> <a href="/parcInfo/serveur/getAll"> Liste de Serveurs </a></li>
        <li> <a href="/parcInfo/service/getAll"> Liste des Services </a></li>
      </ul>
    </div>
    <div class="container-fluid">
    <div class="panel panel-primary">
    <div class="panel-heading"> Liste Services</div>
    <div class="panel-body">
      <table class="table table-bordered table-striped">
        <tr>
          <th>ID</th>
          <th>Nom Service</th>
          <th>Serveur</th>
        </tr>

            <?php
            //PARCOUR DU TABLEAU CONTENANT LES SERVERS
            foreach ($data['services'] as $service) {
               
                ?>
              <tr>
                <td><?php echo $service['idService'] ?></td>
                <td><?php echo $service['nomService'] ?></td>
                <td><?php echo $service['nomServeur'] ?></td>

                <!-- Lien de Suppression -->
                <td><a class="btn btn-danger" href="delete/<?php echo $service['idService'] ?>">Delete</a>
                <!-- Lien de Modification -->
                <a class="btn btn-info" href="edit/<?php echo $service['idService'] ?>">Edit</a></td>
              </tr>
            <?php
            
          }

        ?>
      </table>
      
    <a href="/parcInfo/service/addService" class="btn btn-primary"> Ajout Service</a>
  </div>
  </div>
  </div>
  </body>

</html>





