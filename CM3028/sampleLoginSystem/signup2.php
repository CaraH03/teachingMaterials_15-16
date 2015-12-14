<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 14/12/2015
 * Time: 11:22
 */

//Includes the Database connection script
include ("db_connect.php");

//GETS THE USERNAME AND PASSWORD FROM PREVIOUS PAGE
$username = $_POST["username"];
$password = $_POST["password"];
$passwordcheck = $_POST["passwordcheck"];
$email = $_POST["email"];

if ($password==$passwordcheck)
{
    $sql = "INSERT INTO users (username, password, email) VALUES ('". $username ."', '" .$password."', '".$email."')";
    if (mysqli_query($db, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    session_start();
    $_SESSION['username'] = $username;
    header("location:index.php");
}
else
{
    echo "Passwords do not match";
}
?>