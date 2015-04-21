<?php
$user = 'root';
$pass = 'kaiden90';
$userName = "ben";
$dbh = new PDO('mysql:host=localhost;port=8889;dbname=webterm', $user, $pass);
$sql = "SELECT name FROM playlist WHERE ownername = 'ben'";

$res = "";
foreach($dbh->query($sql) as $row){
	$res .= "<option value=\"".$row['name']."\">".$row['name']."</option>";
}

echo $res;
?>