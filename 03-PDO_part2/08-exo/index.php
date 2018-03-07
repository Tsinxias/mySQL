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
  <h2>Exo 8</h2>

  <form class="" action="booking.php" method="post" enctype="multipart/form-data">
    <?php
    $select = "SELECT * FROM bookings WHERE id = '24' OR id = '25'";
    $prepare = $bdd->query($select);

    while ($show = $prepare->fetch(PDO::FETCH_ASSOC)) {
      echo '<label for="bookingId">Numéro réservation</label>
      <input type="number" name="bookingId" value="' . $show['id'] . '">
      <br>

      <label for="clientId">Numéro client</label>
      <input type="number" name="bookingId" value="' . $show['clientId'] . '">
      <br>
      <br>';
    }
     ?>
    <button type="submit" name="button">Delete</button>
  </form>
</body>
</html>
