<?php

require "../app/models/Etudiant.php";
class EtudiantController{
    public function getEtudiant(){
    $etudiant = new Etudiant();
      echo json_encode($etudiant->getAll());
    }
}

?>