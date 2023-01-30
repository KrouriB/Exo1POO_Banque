<?php

class Compte_Bancaire{
    private string $libelle;
    private float $soldeInitial;
    private float $soldeActuel;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct($libelle, $soldeInitial, $devise, $titulaire) {
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->soldeActuel = $soldeInitial;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->ajoutCompte($this);
    }

    public function get_libelle() {
        return $this->libelle;
    }public function get_soldeInitial() {
        return $this->soldeInitial;
    }public function get_devise() {
        return $this->devise;
    }public function get_titulaire() {
        return $this->titulaire;
    }

    public function crediter(float $ajout){
        $this->soldeActuel += $ajout;
        return $this->soldeActuel;
    }

    // public function afficherCompte(){
    //     $display = "";
    //     $display .= "Libellé : ";
    //     $display .= $this->get_libelle();
    //     $display .= "<br>";
    //     $display .= "Au nom de ";
    //     $display .= $this->titulaire->get_prenom();
    //     $display .= " ";
    //     $display .= $this->titulaire->get_nom();
    //     $display .= "<br>";
    //     $display .= "<br>";
    //     echo $display;
    // }
}

?>