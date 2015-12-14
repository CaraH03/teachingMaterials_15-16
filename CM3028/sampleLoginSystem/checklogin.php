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
$username = $POST_["username"];
$password = $POST_["password"];


//MYSQL INJECTION PROTECTION
$username = stripslashes($username);
$password = stripslashes($password);

$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);



echo $username;
echo $password;

//FIND THE USER IN THE DATABASE
$sql="SELECT * FROM users WHERE username='". $username ."' and password='". $password . "'";


echo $sql;

//RUN THE QUERY
$result = $db->query($sql);



$loginSuccessful = 0;
while($row = $result->fetch_array()) {
    $loginSuccessful = 1;
}



// If result matched $username and $password, table row must be 1 row
if($loginSuccessful==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
    echo "User Exists in Database";
    /*
    session_register("myusername");
    session_register("mypassword");
    header("location:login_success.php");
    */
}
else {
    echo "Wrong Username or Password";
    echo "This changed again";
}

?>