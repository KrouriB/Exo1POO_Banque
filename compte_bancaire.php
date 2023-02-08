<?php

class Compte_Bancaire{
    private string $libelle;
    private float $soldeInitial;
    private float $soldeActuel;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle,float $soldeInitial,string $devise,Titulaire $titulaire) {
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
    }public function getTitulaire() {
        return $this->titulaire;
    }

    public function __toString()
    {
        return "Libellé : ".$this->libelle."<br>Au solde Initial de : ".$this->soldeInitial." ".$this->devise."<br>Dont le solde est actuellement de : ".$this->soldeActuel." ".$this->devise."<br>";
    }

    public function crediter(float $ajout){
        $this->soldeActuel += $ajout;
        echo "$ajout  $this->devise a bien été ajouter<br><br>";
        return $this->soldeActuel;
    }
    public function debiter(float $ajout){
        $this->soldeActuel -= $ajout;
        echo "$ajout  $this->devise a bien été retirer<br><br>";
        return $this->soldeActuel;
    }

    public function transfer(Compte_Bancaire $v2,float $ajout){
        $this->crediter($ajout);
        $v2->debiter($ajout);
        echo "le transfère de $ajout $this->devise a bien eu lieu<br><br>";
    }



    public function afficherCompte(){
        $display = $this;
        $display .= "Au nom de ";
        $display .= $this->titulaire->get_prenom();
        $display .= " ";
        $display .= $this->titulaire->get_nom();
        $display .= "<br>";
        $display .= "<br>";
        echo $display;
    }
}

?>