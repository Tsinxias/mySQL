<?php
$bdd = new PDO('mysql:host=localhost;dbname=reunion_island', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <tr>
        <th>Nom</th>
        <th>Difficulté</th>
        <th>Distance en KM</th>
        <th>Durée</th>
        <th>Hauteur en m</th>
      </tr>
      <!-- Afficher la liste des randonnées -->
      <?php
      $select = "SELECT * FROM hiking";
      $prepare = $bdd->query($select);
      while ($show = $prepare->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
              <td><a href="update.php?hike='.$show["id"].'">'.$show["name"].'</a></td>
              <td>'.$show["difficulty"].'</td>
              <td>'.$show["distance"].'</td>
              <td>'.$show["duration"].'</td>
              <td>'.$show["height_difference"].'</td>
              </tr>';
      }
       ?>
    </table>
  </body>
</html>
