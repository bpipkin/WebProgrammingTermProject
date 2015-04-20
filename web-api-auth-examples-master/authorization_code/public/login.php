<?php
session_start();
?>

<?php
$dbh = new PDO('mysql:host=localhost;dbname=webterm', 'root', '');

$user = $_GET['user'];
$pass = $_GET['pass'];
$res = null;

$sql = "SELECT * FROM user WHERE username = $user && password = $pass";
$res = $dbh->query($sql);
if($res != null){
   $_SESSION["username"] = $user;
}
else{
    session_destroy();
}
?>