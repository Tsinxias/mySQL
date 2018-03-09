<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  try {
    require 'connect.php';

    $sql = "INSERT INTO hiking (name, difficulty, distance, duration, height_difference)
            VALUES (?, ?, ?, ?, ?)";
    $request = $bdd->prepare($sql);

    $name = $_POST['name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];

    $request->execute(array($name, $difficulty, $distance, $duration, $height_difference));

    header('Location: create.php?request=success');
  } catch (PDOException $e) {
    print "Error !: " . $e->getMessage() . "<br/>";
    die();
  }
?>
