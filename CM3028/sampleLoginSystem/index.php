<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>

<?
session_start();
if (isset($_SESSION['username']))
{
//SESSION DOES EXIST
    echo "Hello " . $_SESSION['username'];
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
<?
}


?>






</body>
</html>