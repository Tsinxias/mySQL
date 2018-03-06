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
  <h2>Exo 5</h2>

  <form class="" action="showUpdate.php" method="post" enctype="multipart/form-data">
    <label for="title">Titre du spectacle</label>
      <?php
      $allshow = "SELECT * FROM shows WHERE title = 'Vestibulum accumsan'";
      $shows = $bdd->query($allshow);
      $rowShow = $shows->fetch(PDO::FETCH_ASSOC);
       ?>
    <input type="text" name="title" value="<?php echo $rowShow['title'] ?>" placeholder="Enter spectacle title">
    <br>

    <label for="artist">Nom de l'artiste</label>
    <input type="text" name="artist" value="<?php echo $rowShow['performer'] ?>" placeholder="Enter artist name">
    <br>

    <label for="date">Date du spectacle</label>
    <input type="date" name="date" value="<?php echo $rowShow['date'] ?>" placeholder="Enter show date">
    <br>

    <label for="showtype">Type de spectacle</label>
    <input type="number" name="showtype" value="<?php echo $rowShow['showTypesId'] ?>">
    <br>

    <label for="genre1">Genre n°1</label>
    <input type="number" name="genre1" value="<?php echo $rowShow['firstGenresId'] ?>">
    <br>

    <label for="genre2">Genre n°2</label>
    <input type="number" name="genre2" value="<?php echo $rowShow['secondGenreId'] ?>">
    <br>

    <label for="duration">Durée</label>
    <input type="time" name="duration" value="<?php echo $rowShow['duration'] ?>" placeholder="Enter show duration">
    <br>

    <label for="startTime">Heure du début</label>
    <input type="time" name="startTime" value="<?php echo $rowShow['startTime'] ?>" placeholder="Enter start time">
    <br>

    <button type="submit" name="button">Submit</button>
  </form>
</body>
</html>
