<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Web Page</title>

</head>
<body>

<h1>Title</h1>


<?php

$username = $_GET["username"];
echo $username;

echo "<p>Hello " . $username . " how are you today?</p>";

echo "<p>Hello {$username} how are you today?</p>";

?>

</body>
</html>