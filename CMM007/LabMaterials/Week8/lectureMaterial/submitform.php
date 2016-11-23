<?php
//include database
include ("db_connect.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

$sql = "INSERT INTO newusers (firstname, lastname) VALUES ('$firstname', '$lastname')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:viewusers.php");
?>


