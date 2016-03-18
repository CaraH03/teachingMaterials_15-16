<?php
//include database
include ("db_connect.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];


echo "Hello {$firstname} {$lastname}! How are you today?";

$sql = "INSERT INTO newusers (firstname, lastname) VALUES ('{$firstname}', '{$lastname}')";

header("location:viewusers.php");
?>