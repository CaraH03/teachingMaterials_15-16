<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 21/03/2016
 * Time: 14:46
 */

include("db_connect.php");

$superheroID = $_POST["superhero"];
$villan = $_POST["villan"];

$sql = "INSERT INTO battles (superheroID, villanFought) VALUES ('$superheroID', '$villan')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");
?>
