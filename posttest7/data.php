<?php 
var_dump($_POST);

$username = $_POST['username'];
$password = $_POST['password'];
$pin = $_POST['pin'];

echo "<br><br>Data Login: ";
echo "<br>Username: $username ";
echo "<br>Password: $password ";
echo "<br>PIN: $pin ";
?>
