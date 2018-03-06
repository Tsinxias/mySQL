<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Exo 3</h2>

  <form class="" action="show.php" method="post" enctype="multipart/form-data">
    <label for="title">Titre du spectacle</label>
    <input type="text" name="title" value="" placeholder="Enter show title">
    <br>

    <label for="artist">Nom de l'artiste</label>
    <input type="text" name="artist" value="" placeholder="Enter artist name">
    <br>

    <label for="date">Date du spectacle</label>
    <input type="date" name="date" value="" placeholder="Enter show date">
    <br>

    <label for="showtype">Type de spectacle</label>
    <select class="" name="showtype">

        <?php
        $allshow = "SELECT * FROM showTypes";
        $showtypes = $bdd->query($allshow);

        while ($row = $showtypes->fetch(PDO::FETCH_ASSOC)) {
          echo '<option value="' . $row["id"] . '">' . $row["type"] . '</option>';
        }
         ?>

    </select>
    <br>

    <label for="genre1">Genre n°1</label>
    <select class="" name="genre1">

        <?php
        $allgenre1 = "SELECT * FROM genres";
        $showgenres1 = $bdd->query($allgenre1);

        while ($row = $showgenres1->fetch(PDO::FETCH_ASSOC)) {
          echo '<option value="' . $row["id"] . '">' . $row["genre"] . '</option>';
        }
         ?>

    </select>
    <br>

    <label for="genre2">Genre n°2</label>
    <select class="" name="genre2">

        <?php
        $showgenres1 = $bdd->query($allgenre1);

        while ($row = $showgenres1->fetch(PDO::FETCH_ASSOC)) {
          echo '<option value="' . $row["id"] . '">' . $row["genre"] . '</option>';
        }
        ?>

    </select>
    <br>

    <label for="duration">Durée</label>
    <input type="time" name="duration" value="" placeholder="Enter show duration">
    <br>

    <label for="startTime">Heure du début</label>
    <input type="time" name="startTime" value="" placeholder="Enter start time">
    <br>

    <button type="submit" name="button">Submit</button>
  </form>
</body>
</html>
