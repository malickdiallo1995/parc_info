<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../src/public/css/bootstrap.min.css">
    <title>Liste Serveur</title>
  </head>

  <body>
    <div class="navbar navbar-default">
      <ul class ="nav navbar-nav">
        <li> <a href="/parcInfo/serveur/addServeur"> Ajout de Serveur </a></li>
        <li> <a href="/parcInfo/service/addService"> Ajout de Services </a></li>
        <li> <a href="/parcInfo/service/getAll"> Liste des Services </a></li>
      </ul>
    </div>
    <div class="container-fluid">
    <div class="panel panel-primary">
    <div class="panel-heading"> Liste Serveurs</div>
    <div class="panel-body">
      <table class="table table-bordered table-striped">
        <tr>
          <th>ID</th>
          <th>Nom Serveur</th>
          <th>Adresse IP</th>
          <th>Action</th>

        </tr>

        <?php
        //PARCOUR DU TABLEAU CONTENANT LES SERVERS
        foreach ($data['serveurs'] as $serveur) {
            ?>
          <tr>
            <td><?php echo $serveur['idServeur'] ?></td>
            <td><?php echo $serveur['nomServeur'] ?></td>
            <td><?php echo $serveur['adripServeur'] ?></td>

            <!-- Lien de Suppression -->
            <td><a class="btn btn-danger" href="delete/<?php echo $serveur['idServeur'] ?>">Delete</a>
            <!-- Lien de Modification -->
            <a class="btn btn-info" href="edit/<?php echo $serveur['idServeur'] ?>">Edit</a></td>
          </tr>
        <?php
      }

    ?>
      </table>

    <a href="/parcInfo/serveur/addServeur" class="btn btn-primary"> Ajout Serveur</a>
  </div>
  </div>
  </div>
  </body>

</html>





