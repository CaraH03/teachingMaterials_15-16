<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 18/11/2015
 * Time: 11:37
 */
include ("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<nav>
<!-- Menu Creation -->
    <?

    $sql_query = "SELECT * FROM sectionText where topicID = '5'";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        echo "<li><a href=\"index.php?sectionID?=". $row['sectionID']."\">".$row['sectionName']."</a>";
    }
?>


</nav>