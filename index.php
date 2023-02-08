<h1>Exercice 1</h1>

<p>I.Banque<br>
<br><strong>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs.</strong><br>

<br>Un compte bancaire est composé des éléments suivants :<br>

<li>Un libellé (compte courant, livret A, ...)</li>
<li>Un solde initial</li>
<li>Une devise monétaire</li>
<li>Un titulaire unique</li>

<br>Un titulaire comporte :

<li>Un nom</li>
<li>Un prénom</li>
<li>Une date de naissance</li>
<li>Une ville</li>
<li>L'ensemble de ses comptes bancaires.</li>

<br>Sur un compte bancaire, on doit pouvoir :

<li>Créditer le compte de X euros</li>
<li>Débiter le compte de X euros</li>
<li>Effectuer un virement d'un compte à l'autre.</li>

<br>On doit pouvoir :

<li>Afficher toutes  les  informations  d'un(e)  titulaire  (dont  l'âge)  et  l'ensemble  des  comptes appartenant à celui(celle)-ci.</li>
<li>Afficher  toutes  les  informations  d'un  compte  bancaire,  notamment  le  nom  /  prénom  du titulaire du compte.</li></p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$perso1 = new Titulaire("Doigt","Nez","08-02-1998","Maurice");
$perso2 = new Titulaire("Moi","Maid","19-07-1996","DansLeNord");
$compte1_1 = new Compte_Bancaire("Compte Courant",500,"€",$perso1);
$compte1_2 = new Compte_Bancaire("Eco",200,"€",$perso1);
$compte2_1 = new Compte_Bancaire("Compte Courant",600,"€",$perso2);
$compte2_2 = new Compte_Bancaire("AchatPC",800,"€",$perso2);
$perso1->afficherInfosTitulaire();
$compte1_1->afficherCompte();
$compte2_1->afficherCompte();
$compte1_1->crediter(200);
$compte2_1->debiter(50);
$compte1_1->afficherCompte();
$compte2_1->afficherCompte();
$compte1_2->afficherCompte();
$compte1_2->transfer($compte1_1, 300);
$compte1_1->afficherCompte();
$compte1_2->afficherCompte();

?>