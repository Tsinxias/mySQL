<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  try {
    require 'connect.php';

    $hikeID = $_POST['hikeID'];
    // $sql = "UPDATE hiking (name, difficulty, distance, duration, height_difference)
    //         VALUES (':name', ':difficulty', ':distance', ':duration', ':height_difference')
    //         WHERE id = '$hikeID'";


    // $name = $_POST['name'];
    // $difficulty = $_POST['difficulty'];
    // $distance = $_POST['distance'];
    // $duration = $_POST['duration'];
    // $height_difference = $_POST['height_difference'];
    //
    // $sql = "UPDATE hiking
    //         SET name = '$name', difficulty = '$difficulty', distance = '$distance', duration = '$duration', height_difference = '$height_difference'
    //         WHERE id = '$hikeID'";
    // $request = $bdd->prepare($sql);


    // $request->bindParam(':name', $name);
    // $request->bindParam(':difficulty', $difficulty);
    // $request->bindParam(':distance', $distance);
    // $request->bindParam(':duration', $duration);
    // $request->bindParam(':height_difference', $height_difference);


    // $request->execute(array($name, $difficulty, $distance, $duration, $height_difference));

    // $request->execute();


    $sql = "UPDATE hiking
            SET name = '".$_POST['name']."', difficulty = '".$_POST['difficulty']."', distance = '".$_POST['distance']."', duration = '".$_POST['duration']."', height_difference = '".$_POST['height_difference']."'
            WHERE id = '".$_POST['hikeID']."'";


    $request->exec();
    // var_dump($_POST);
    header('Location: update.php');
  } catch (PDOException $e) {
    print "Error !: " . $e->getMessage() . "<br/>";
    die();
  }
?>
