<?php

        $db = new PDO('mysql:host=localhost;port=8889;dbname=webterm','root','root');

        $pName = $_POST["pName"];
        $sid = $_POST["sid"];
        $pOwner = "ben";
        $pos = $_POST["pos"];

        $sql = "insert into track (sid, pname, powner, pos) values ('$sid','$pName','$pOwner','$pos')";
        $db->query($sql);
?>
