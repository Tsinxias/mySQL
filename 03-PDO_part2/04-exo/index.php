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

  <h2>Exo 4</h2>

  <h4>Data updates</h4>
  <form class="" action="changeClient.php" method="post" enctype="multipart/form-data">
    <p><strong>Information</strong></p>
    <label for="lastname">Nom</label>
      <?php
        $sqlselect = "SELECT * FROM clients WHERE lastName = 'Perry'";
        $requestselect = $bdd->query($sqlselect);
        $row = $requestselect->fetch(PDO::FETCH_ASSOC);
       ?>
      <input type="text" name="lastname" value="<?php echo $row['lastName'] ?>">
    <br>

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" value="<?php echo $row['firstName'] ?>">
    <br>

    <label for="birthdate">Date de naissance</label>
    <input type="date" name="birthdate" value="<?php echo $row['birthDate'] ?>">
    <br>

    <label for="card">Carte de fidélité</label>
      <?php
      $requestselect = $bdd->query($sqlselect);
        while ($row = $requestselect->fetch(PDO::FETCH_ASSOC)) {
          if ($row['card'] == '1') {
            echo '<input checked type="radio" name="card" value="' . $row['card'] . '">Oui';
            echo '<input type="radio" name="card" value="' . $row['card'] . '">Non';
          } else {
            echo '<input type="radio" name="card" value="' . $row['card'] . '">Oui';
            echo '<input checked type="radio" name="card" value="' . $row['card'] . '">Non';
          }
        }
       ?>
    <!-- <input type="radio" name="card" value="1">Oui
    <input type="radio" name="card" value="0">Non -->
    <br>

    <label for="cardnumber">Numéro de carte</label>
      <?php
      $requestselect = $bdd->query($sqlselect);
        while ($row = $requestselect->fetch(PDO::FETCH_ASSOC)) {
          echo '<input type="number" name="cardnumber" value="' . $row['cardNumber'] . '">';
        }
       ?>
    <br>

    <button type="submit" name="button">Submit</button>
  </form>

  <script src="jquery-3.2.1.js" charset="utf-8"></script>
  <script type="text/javascript">
    // $('.change').hide();
    // $('#displayInfo').on('click', function() {
    //   $('.change').show();
    // });
  </script>
</body>
</html>
