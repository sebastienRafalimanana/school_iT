<?php

header('Access-Control-Allow-Origin:*');
require '../../app/controller/InscriptionController.php';
$data = file_get_contents('php://input');
$data =json_decode($data);

try {
    $inscription = new InscriptionController();
    $inscription->reinscription($data);
    echo "succes";
} catch (PDOException $ex) {
    echo "err";
}


?>