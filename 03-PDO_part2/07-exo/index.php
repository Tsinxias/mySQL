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
  <h2>Exo 7</h2>

  <?php
  $sqlSelect24 = "SELECT * FROM clients WHERE id ='24'";
  $prepare24 = $bdd->query($sqlSelect24);
  $show24 = $prepare24->fetch(PDO::FETCH_ASSOC);

  $sqlSelect25 = "SELECT * FROM clients WHERE id ='25'";
  $prepare25 = $bdd->query($sqlSelect25);
  $show25 = $prepare25->fetch(PDO::FETCH_ASSOC);
   ?>

  <form class="" action="client.php" method="post" enctype="multipart/form-data">
    <label for="id1">Numéro client : </label>
    <input type="number" name="id1" value="<?php echo $show24['id'] ?>">
    <br>

    <label for="lastname1">Nom : </label>
    <input type="text" name="lastname1" value="<?php echo $show24['lastName'] ?>">
    <br>

    <label for="firstname1">Prénom : </label>
    <input type="text" name="firstname1" value="<?php echo $show24['firstName'] ?>">
    <br

    <label for="birthdate1">Date de naissance : </label>
    <input type="date" name="birthdate1" value="<?php echo $show24['birthDate'] ?>">
    <br>

    <label for="card1">Carte de fidélité : </label>
    <input type="checkbox" name="card1" value="<?php echo $show24['card'] ?>">
    <br>

    <label for="cardnumber1">Numéro de carte de fidélité : </label>
    <input type="number" name="cardnumber1" value="<?php echo $show24['cardNumber'] ?>">
    <br>
    <br>


    <label for="id2">Numéro client : </label>
    <input type="number" name="id2" value="<?php echo $show25['id'] ?>">
    <br>

    <label for="lastname2">Nom : </label>
    <input type="text" name="lastname2" value="<?php echo $show25['lastName'] ?>">
    <br>

    <label for="firstname2">Prénom : </label>
    <input type="text" name="firstname2" value="<?php echo $show25['firstName'] ?>">
    <br>

    <label for="birthdate2">Date de naissance : </label>
    <input type="date" name="birthdate2" value="<?php echo $show25['birthDate'] ?>">
    <br>

    <label for="card2">Carte de fidélité : </label>
    <input type="checkbox" name="card2" value="<?php echo $show25['card'] ?>">
    <br>

    <label for="cardnumber2">Numéro de carte de fidélité : </label>
    <input type="number" name="cardnumber2" value="<?php echo $show25['cardNumber'] ?>">
    <br>

    <button type="submit" name="button">Delete</button>
  </form>
</body>
</html>
