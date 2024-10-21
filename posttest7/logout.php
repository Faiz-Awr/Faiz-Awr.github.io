<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] !== true){
    header('Location: index.php');
}
session_unset();
session_destroy(); 
header("Location: index.php"); 
exit;
?>
