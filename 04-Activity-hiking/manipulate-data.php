<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  try {
    require 'connect.php';

    $hikeID = $_POST['hikeID'];
    $name = $_POST['name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];
    $available = $_POST['available'];

    $sql = "UPDATE hiking
            SET name = '$name', difficulty = '$difficulty', distance = '$distance', duration = '$duration', height_difference = '$height_difference', available='$available'
            WHERE id = '$hikeID'";
    $request = $bdd->prepare($sql);

    $request->execute();

    header('Location: read.php');
  } catch (PDOException $e) {
    print "Error !: " . $e->getMessage() . "<br/>";
    die();
  }

?>
