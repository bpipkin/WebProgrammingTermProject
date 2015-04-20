<?php
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=webterm', $user, $pass);
$playlistName = "";//provided by user
$userName = "";//get from session
$data = "";//JSON RETURNED
$sql = "INSERT INTO playlist (name, ownername) VALUES ($playlistName, $userName)";
for($i = 0; $i < data.response.songs.length; $i++){
    $sql = "INSERT INTO song VALUES($data.response.songs[i].id,  $data.response.songs[i].title, $data.response.songs[i].artist_name)";
    $sql = "INSERT INTO track VALUES($data.response.songs[i].id, $playlistName, $userName, $i)";
}
?>