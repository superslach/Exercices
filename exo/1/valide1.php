<?php
$prenom = $_GET['prenomPers'];
$nom = $_GET['nomPers'];
$adresse = $_GET['adressePers'];
$ville = $_GET['villePers'];
$cp = $_GET['cp'];

print("Bienvenue $prenom <strong> $nom </strong>.<br> 
       Nous avons bien noté que vous habitez $adresse <strong> $ville </strong> ( $cp )" );
?>