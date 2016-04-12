<?php
include('db_connect.php');
$bugID = $_GET['bugID'];
$sql_query = "SELECT * FROM softwareBugs WHERE bugID = '".$bugID."'";

$result = $db->query($sql_query);

while($row = $result->fetch_array())
{
    echo "<h4>Bug Name: {$row['bugName']}</h4>";
    echo "<p>The current bug ID is {$row['bugID']} </p>";
    echo "<p><strong>Comments:</strong><br>";
    echo "{$row['bugComments']}";
}

?>