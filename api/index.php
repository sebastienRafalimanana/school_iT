<?php
/**
 * connection base de donne
 */

header('Access-Control-Allow-Origin:*');
$data = file_get_contents('php://input');
$data =json_decode($data);
echo $data;

$Get_Template = false;
require '../app/controller/Controller.php';
$api = new Controller;


require '../app/route/Route.php';


?>