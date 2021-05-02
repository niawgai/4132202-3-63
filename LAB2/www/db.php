<?php

try{
    $mysqli = new mysqli("localhost","root","tesr","myDB");
    echo  "connected !!!";
}
catch(Exception $e){
    echo $e->getMessage();
    echo "Error !!!";
}
?>