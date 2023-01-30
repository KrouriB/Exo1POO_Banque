<?php

class Titulaire{

    private $nom;
    private $prenom;
    private $dateNaissance;
    private $ville;
    private array $comptes;

    public function __construct($prenom, $nom, $dateNaissance, $ville){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
        $this->comptes=[];
    }

    public function ajoutCompte($leCompte){
        $this->comptes[] = $leCompte;
    }

    public function get_prenom() {
        return $this->prenom;
    }public function get_nom() {
        return $this->nom;
    }public function get_dateNaissance() {
        return $this->dateNaissance;
    }public function get_ville() {
        return $this->ville;
    }

    public function afficherInfosTitulaire(){
        $display = "";
        $display .= "Information de ";
        $display .= $this->get_prenom();
        $display .= " ";
        $display .= $this->get_nom();
        $display .= "<br>";
        $display .= "Né en ";
        $display .= $this->get_dateNaissance();
        $display .= "<br>";
        $display .= "Vivant à ";
        $display .= $this->get_ville();
        $display .= "<br>";
        foreach ($this->comptes as $unePersonne){
            $display .= "Le compte :";
            $display .= $unePersonne->get_libelle();
            $display .= "<br>";
        }
        echo $display;
    }

    
}

?>