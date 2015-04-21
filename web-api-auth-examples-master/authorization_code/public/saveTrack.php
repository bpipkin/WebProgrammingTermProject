<?php

        $db = new PDO('mysql:host=localhost;port=3306;dbname=webterm','root','');

        $pName = $_POST["pName"];
        $sid = $_POST["sid"];
        $pOwner = "ben";
        $pos = $_POST["pos"];

        $sql = "insert into track (sid, pname, powner, pos) values ('$sid','$pName','$pOwner','$pos')";
        $db->query($sql);
?>
