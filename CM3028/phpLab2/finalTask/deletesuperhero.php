<?php
$superheroID = $_GET["id"];
echo $superheroID;
$db = new mysqli(
    "eu-cdbr-azure-west-c.cloudapp.net",
    "b0c2ff384f05bb",
    "82b4d3a0",
    "mjc7778db"
);

// Delete
$sql = "DELETE FROM superherotask WHERE index='$superheroID'";
$result = $db->query($sql);

header('Location: displaySuperheros.php');
?>