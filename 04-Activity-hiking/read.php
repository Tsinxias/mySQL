<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  try {
    require 'connect.php';
    session_start();
//----------user rights----------//
    if (!isset($_SESSION['username'])) {
  		echo 'Pas d\'accès, veuillez vous connectez en tant qu\'administrateur !';
  		die();
  	}

//----------WELCOME MESSAGE---------//
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
      echo '<h3>Bienvenu ' . $_SESSION['username'] . ' !</h3>';
    }

  } catch (PDOException $e) {
    print "Error !: " . $e->getMessage() . "<br/>";
    die();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <a href="logout.php"><button class="logoutBtn" type="button" name="button">Log Out</button></a>

    <h1>Liste des randonnées</h1>
    <a href="create.php"><button class="createBtn" type="button" name="button">Créer un nouveau parcours</button></a>

    <table>
      <tr>
        <th>Nom</th>
        <th>Difficulté</th>
        <th>Distance en KM</th>
        <th>Durée</th>
        <th>Hauteur en m</th>
        <th>Praticable</th>
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
              <td>'.$show["available"].'</td>
              <td>
                <a href="delete.php?hike='.$show["id"].'"><button type="submit" name="button">Supprimer</button></a></td>
              </tr>';
      }
       ?>
    </table>

    <?php
      if (isset($_GET['request'])) {
        echo "La randonnée a bien été supprimée.";
      }
     ?>

  </body>
</html>
