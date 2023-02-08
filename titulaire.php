<?php

class Titulaire{

    private string $nom;
    private string $prenom;
    private Titulaire $titulaire;
    private DateTime $laDateNaissance;
    private string $ville;
    private array $comptes;

    public function __construct(string $prenom,string $nom,string $dateNaissance,string $ville){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->laDateNaissance = new DateTime($dateNaissance);
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
        return $this->laDateNaissance;
    }public function get_ville() {
        return $this->ville;
    }public function getTitulaire() {
        return $this->titulaire;
    }

    public function age() {
        $today = new DateTime();
        $interval = date_diff($this->laDateNaissance, $today);
        return $interval->format('%y ans');
    }

    public function __toString()
    {
        return "Information de ".$this->get_prenom()." ".$this->get_nom()."agé de ".$this->age();
    }

    public function afficherInfosTitulaire(){
        $display = $this."<br>";
        foreach ($this->comptes as $unePersonne){
            $display .= "Compte :";
            $display .= $unePersonne->get_libelle();
            $display .= "<br>";
        }
        $display .= "<br>";
        echo $display;
    }

    
}

?>