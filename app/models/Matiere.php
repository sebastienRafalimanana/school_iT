<?php
require "app/Database.php";
class Matiere extends Database{
    private $nom_matiere;
    private $coeff_matiere;
    
    
    function __construct($nom_matiere,$coeff_matiere) {
        $this->nom_matiere = $nom_matiere;
        $this->coeff_matiere = $coeff_matiere;

    }
    public function addMatiere(){
        $sql = "INSERT INTO `matiere` (`Nom_Matiere`, `Coeff_Matiere`) VALUES (  $this->nom_matiere , $this->coeff_matiere) "
        $this->execute($sql);
    }
    public function updateMatiere($id){
        $sql = "UPDATE `matiere` SET `Nom_Matiere` = '$this->nom_matiere', `Coeff_Matiere` = '$this->coeff_matiere' WHERE `matiere`.`Num_Matiere` = $id";
        $this->execute($sql);
    }
    public function getAll(){
        $sql="SELECT * FROM `matiere` ";
        $data = $this->execute_query($sql);
        return $data;
    }

}

?>