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
  <h2>Exo 9</h2>

  <form class="" action="tickets.php" method="post" enctype="multipart/form-data">
    <?php
    $select = "SELECT * FROM tickets WHERE bookingsId = '24' OR bookingsId ='25'";
    $prepare = $bdd->query($select);
    while ($row = $prepare->fetch(PDO::FETCH_ASSOC)) {
      echo '<label for="tickets">Numéro billets : </label>';
      echo '<input type="number" name="tickets" value="' . $row['id'] . '">';
      echo "<br>";
      echo '<label for="price">Prix : </label>';
      echo '<input type="number" name="price" value="' . $row['price'] . '">';
      echo "<br>";
      echo '<label for="bookings">Numéro réservation : </label>';
      echo '<input type="number" name="bookings" value="' . $row['bookingsId'] . '">';
      echo "<br>";
      echo "<br>";
    }
     ?>
     <button type="submit" name="button">Delete</button>
  </form>
</body>
</html>
