<?
include('db_connect.php');
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$canfly = $_POST["canfly"];
$zappy = $_POST["zapper"];
$sarcasm = $_POST["sarcasm"];

$sql = "INSERT INTO superherotask VALUES (firstName = '$firstname ', lastname = '$lastname', dob = '$dob', gender = '$gender', fly = '$canfly', zap = '$zappy', sarcastic = '$sarcasm')";
$result = $db->query($sql);

header('Location: index.html');

?>