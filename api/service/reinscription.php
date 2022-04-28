<?php

header('Access-Control-Allow-Origin:*');
require '../../app/controller/InscriptionController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = file_get_contents('php://input');
    $data =json_decode($data);

    try {
        $inscription = new InscriptionController();
        $inscription->reinscription($data);
        echo "succes";
    } catch (PDOException $ex) {
        echo "err";
}

}
if ($_SERVER["REQUEST_METHOD"] == "GET"){
        if (isset($_GET['matricule'])) {
           $matricule = $_GET['matricule'];
           $inscription = new Inscription();
           $data = $inscription->onGetEtudiantInformation($matricule);
           echo json_encode($data);
        }
}

?>