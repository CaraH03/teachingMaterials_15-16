<?php

include("db_connect.php");

$sbugName = $_POST["bugName"];
$bugComments = $_POST["bugComments"];

$sql = "INSERT INTO softwareBugs (bugName, bugComments) VALUES ('$bugName', '$bugComments')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");
?>
