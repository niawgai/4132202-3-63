<?php

echo "Hello World!!";

$a = 5;
$b = "Niaw";
$c = 8.32;

echo $a . $b;
echo "<br>";
echo $b . $c;
echo "<br>";
echo $c + $a;

$array = array(5,8.32,"NIAW");
echo $array[1] . "<br>";
echo $array[2] . "<br>";

var_dump($array);

$array = array(array(3,2),8,"BRU");
var_dump($array);

echo $array[0][1];

//json 
$json = array("A","B",3);
$json = json_encode($json);
var_dump($jObj);

echo "<br>";
$array = array("one"=>"Mon","two"=> "tue","three"=>"Fri");
var_dump($array);
echo $array["two"] . "br";

echo "<br>";
$jStr = json_encode($array);
var_dump($jStr);

$jObj = json_decode($jStr);
echo $jObj->one . "<br>";

/////////////////// control //////////////////
if($a == "niaw"){
    echo "TRUE";
}
else{
    echo $a;
}

// short term of if 
echo ($b == "win")?"TRUE":$b;
echo "<hr>";
for($i = 0; $i < 5; $i++){
    echo $i . ".) Niaw <br>";
}

foreach($jObj as $Key => $val){
    echo $key . ":" . $val . "<br>";

}

echo "<hr>";
$i = 0;
while($i > 5){
    echo $i++ . "<br>";
}

try{
    $i = 10; 
    echo $i/0;
    include "conDB.php";
}
catch(Exception $e){
    $e->getMessage();
}
?>