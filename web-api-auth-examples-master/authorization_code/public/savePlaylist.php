<?php

	$db = new PDO('mysql:host=localhost;dbname=webterm', 'root', '');

	$pName = $_POST["pName"];
	$pOwner = $_POST["pOwner"];

	$sql = "INSERT INTO playlist (name, ownername) VALUES ($pName,$pOwner)";
	echo $sql;
	$dbh->query($sql);






	/*
	for($i = 0; $i < data.response.songs.length; $i++){
	       $sql = "INSERT INTO song VALUES($data.response.songs[i].id,  $data.response.songs[i].title, $data.response.songs[i].artist_name)";
    	       $dbh->query($sql);
    	       $sql = "INSERT INTO track VALUES($data.response.songs[i].id, $playlistName, $userName, $i)";
    	       $dbh->query($sql);
	 }
	 */
?>