<?php

header('Access-Control-Allow-Origin:*');
require '../../app/models/app/Database.php';
$data = file_get_contents('php://input');
$data =json_decode($data);
var_dump($data->{"email"}) ;


?>