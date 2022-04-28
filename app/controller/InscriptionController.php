<?php

require "../../app/models/Etudiant.php";
require "../../app/models/Inscription.php";
class InscriptionController{
    public function inscription($data){
        $annee = $data->{'annee'};
        $mention = $data->{'mention'};
        $niveau = $data->{'niveau'};
        $matricule = $data->{'matricule'};
        $nom = $data->{'nom'};
        $prenom =  $data->{'prenom'};
        $date_naissance = $data->{'date_naissance'};
        
        $etudiant = new Etudiant($matricule,$nom,$prenom,$date_naissance);
        $etudiant->add();
        $inscription = new Inscription($matricule, $annee, $niveau, $mention);
        $inscription->onInscription();
    }

    public function reinscription($data){
        $mention = $data->{'mention'};
        $niveau = $data->{'niveau'};
        $annee = $data->{'annee'};
        $matricule = $data->{'matricule'};
    
        $inscription = new Inscription($matricule, $annee, $niveau, $mention);
        $inscription->onRenscription();
    }


}

?>