<h1>Exercice Banque</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires
et leurs comptes bancaires respectifs.
</p>

<?php

spl_autoload_register(function ($class_name) {
require_once $class_name . '.php';
});


$titulaire1 = new Titulaire ("Dupont", "Marie", "2000-12-24", "Paris");

$compte1 = new Compte("Compte Courant", 50, "€", $titulaire1);
$compte2 = new Compte("Livret A", 150, "€", $titulaire1);

// var_dump($titulaire1);
// echo "<br>";
// echo "<br>";
// var_dump($compte1);
// echo "<br>";
// echo "<br>";
// var_dump($compte2);



echo $titulaire1 -> displayAge();
// echo $titulaire1 -> afficherComptes();
echo $compte1 -> afficherSolde();
echo $compte2 -> afficherSolde();
echo $compte1 -> crediterCompte(30);
echo $compte2 -> debiterCompte(50);
echo $compte1 -> virement(20, $compte2);
echo $compte2 -> afficherSolde();
echo $titulaire1 -> informationTitulaire();
echo $compte1 -> informationCompte();


?>