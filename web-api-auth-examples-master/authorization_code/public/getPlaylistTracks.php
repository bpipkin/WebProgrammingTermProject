<?php
$user = 'root';
$pass = 'kaiden90';
$userName = "ben";
$playlistName = $_POST['pname'];
$dbh = new PDO('mysql:host=localhost;port=8889;dbname=webterm', $user, $pass);
$sql = "SELECT * FROM track WHERE powner = 'ben' AND pname = '$playlistName' ORDER BY pos";

$res = "";
foreach($dbh->query($sql) as $row){
	
	$res .= $row['sid'].",";
}

echo $res;
?>