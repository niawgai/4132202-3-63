<?php
$host = "db";
$user = "root";
$pass = "test";
$db = "class_room";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->query("SET NAME utf8");
    echo  "connected !!!";
}
catch(Exception $e){
    echo $e->getMessage();
    echo "Error !!!";
}
?>