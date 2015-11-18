<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 18/11/2015
 * Time: 09:43
 */

$db = new mysqli(
    "eu-cdbr-azure-west-c.cloudapp.net",
    "b0c2ff384f05bb",
    "82b4d3a0",
    "mjc7778db"
);

// test if connection was established, and print any errors

if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

// create a SQL query as a string

$sql_query = "SELECT * FROM superherotask";

// execute the SQL query

$result = $db->query($sql_query);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array

echo "<p><strong>All Movies: </strong>";

while($row = $result->fetch_array()){
    $firstName = $row['firstName'];
    $lastName = $row['firstName'];
    $gender = $row['gender'];
    $DOB = $row['DOB'];
    $fly = $row['fly'];
    $zap = $row['zap'];
    $sarcastic = $row['sarcastic'];


    echo "<p>" . $firstName . " " . $lastName . " is a " . $gender . " superhero born on " . $DOB;
}
echo "</p>";





$result->close();
// close connection to database
$db->close();
