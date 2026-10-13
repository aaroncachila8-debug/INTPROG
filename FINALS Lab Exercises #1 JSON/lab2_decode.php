<?php
$json = '{"name":"Aaron","age":20,"email":"aaroncachila8@gmail.com"}';


$object = json_decode($json);


$array = json_decode($json, true);


echo "Object: " . $object->name . "<br>";
echo "Object Email: " . $object->email . "<br>";

echo "Array: " . $array["email"] . "<br>";
echo "Array Name: " . $array["name"];
?>