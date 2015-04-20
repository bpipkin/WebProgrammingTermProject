<?php
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=webterm', $user, $pass);
$playlistName = "";//provided by user
$userName = "";//get from session
$data = $_POST["songData"];//JSON RETURNED
$sql = "INSERT INTO playlist (name, ownername) VALUES ($playlistName, $userName)";
$dbh->query($sql);
for($i = 0; $i < data.response.songs.length; $i++){
    $sql = "INSERT INTO song VALUES($data.response.songs[i].id,  $data.response.songs[i].title, $data.response.songs[i].artist_name)";
    $dbh->query($sql);
    $sql = "INSERT INTO track VALUES($data.response.songs[i].id, $playlistName, $userName, $i)";
    $dbh->query($sql);
}
?>