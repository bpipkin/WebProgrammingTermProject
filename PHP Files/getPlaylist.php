<?php
$user = 'root';
$pass = '';
$userName = "";
$playlistName = "";
$dbh = new PDO('mysql:host=localhost;dbname=webterm', $user, $pass);
$sql = "SELECT s.* FROM song s, playlist p, user u, track t ";
$sql.= "WHERE u.username = p.ownername && u.username = $userName && t.powner = u.username";
$sql.= "&& p.name = $playlistName && p.name = t.pname && s.id = t.sid ORDER BY t.pos";
?>