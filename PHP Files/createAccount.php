<?php
$user = 'root';
$pass = '';
$userName = "";
$passWord = "";
$dbh = new PDO('mysql:host=localhost;dbname=webterm', $user, $pass);
$sql = "INSERT INTO user (username, password) VALUES ($userName, $passWord)";
?>