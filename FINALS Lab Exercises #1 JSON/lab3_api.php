<?php
header('Content-Type: application/json');

$user = array(
    "id" => 24175229,
    "name" => "Aaron",
    "email" => "aaroncachila8@gmail.com",
    "status" => "active"
);

echo json_encode($user);
?>