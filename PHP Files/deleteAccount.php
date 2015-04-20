<?php
$user = 'root';
$pass = '';
$userName = "";
$dbh = new PDO('mysql:host=localhost;dbname=webterm', $user, $pass);
$sql = "DELETE FROM user WHERE username = $userName";
?>