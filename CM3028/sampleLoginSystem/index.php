<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>

<?
session_start();
include ("db_connect.php");

if (isset($_SESSION['username']))
{
//SESSION DOES EXIST
    echo "Hello " . $_SESSION['username'];

    $sql = "SELECT * FROM users WHERE username='". $_SESSION['username'] . "'";
   /* $result = $db->query($sql);

    while($row = $result->fetch_array())
    {
    echo "User type is " . $row['userType'];
    }
*/
    ?>
    <a href="logout.php">Logout</a>
    <?


}
else
{
//SESSION DOESNT EXIST
?>

    <h1>My Login Form</h1>
<form method="post" action="checklogin.php">
    <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
    <p><input type="password" name="password" value="" placeholder="Password"></p>
    <p class="submit"><input type="submit" name="commit" value="Login"></p>
</form>
    <a href="signup.php">Signup</a>

<?
}
?>

</body>
</html>