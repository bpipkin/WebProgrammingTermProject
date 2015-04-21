<?php
$user = 'root';
$pass = 'kaiden90';
$userName = "ben";
$playlistName = $_POST['pname'];
$dbh = new PDO('mysql:host=localhost;port=8889;dbname=webterm', $user, $pass);

$sql = "DELETE FROM track WHERE powner = 'ben' AND pname = '$playlistName'";
$dbh->query($sql);


$sql2 = "DELETE FROM playlist WHERE ownername = 'ben' AND name = '$playlistName'";
$dbh->query($sql2);

echo "playlist deleted"
?>