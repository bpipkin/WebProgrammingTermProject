<?php

	   $db = new PDO('mysql:host=localhost;port=3306;dbname=webterm', 'root', '');
	   $pName = $_POST["pName"];
	   $pOwner = 'ben';

	   $sql = "INSERT INTO playlist (name, ownername) VALUES ('$pName','$pOwner')";
	   //$_SESSION["username"])";
	   $db->query($sql);




	/*
	for($i = 0; $i < data.response.songs.length; $i++){
	       $sql = "INSERT INTO song VALUES($data.response.songs[i].id,  $data.response.songs[i].title, $data.response.songs[i].artist_name)";
    	       $dbh->query($sql);
    	       $sql = "INSERT INTO track VALUES($data.response.songs[i].id, $playlistName, $userName, $i)";
    	       $dbh->query($sql);
	 }
	 */
?>