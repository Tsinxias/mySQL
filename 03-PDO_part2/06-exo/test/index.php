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
  <h2>Exo 6</h2>

  <form class="" action="client.php" method="post" enctype="multipart/form-data">
    <?php
    $select = "SELECT * FROM clients WHERE id = '5'";
    $prepare = $bdd-> query($select);
    $show = $prepare->fetch(PDO::FETCH_ASSOC);
     ?>
    <input type="hidden" name="id" value="<?php echo $show['id'] ?>">
    <label for="lastname">Nom : </label>
    <input type="text" name="lastname" value="<?php echo $show['lastName'] ?>">
    <br>

    <label for="firstname">Prénom : </label>
    <input type="text" name="firstname" value="<?php echo $show['firstName'] ?>">
    <br>

    <label for="birthdate">Date de naissance : </label>
    <input type="date" name="birthdate" value="<?php echo $show['birthDate'] ?>">
    <br>

    <label for="card">Carte de fidélité</label>
    <?php
    if ($show['card'] == '1' && !empty($show['cardNumber'])) {
      echo '<input type="radio" checked name="card" value="1">Oui';
      echo '<input type="radio" name="card" value="0">Non';
    } else {
      echo '<input type="radio" name="card" value="1">Oui';
      echo '<input type="radio" checked name="card" value="0">Non';
    }
     ?>
    <br>

    <label for="cardnumber">Numéro de carte</label>
    <input type="text" name="cardnumber" value="<?php echo $show['cardNumber'] ?>">
    <br>

    <button type="submit" name="button">Update</button>
  </form>
</body>
</html>
