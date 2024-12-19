<?php
// MAISON
include './Maison.php';
$house = new Maison();
$house->nom = "ChezMoi";
$house->longueur = 15;
$house->largeur = 7;
$house->nbEtages = 1;
$house->surface();

// UTILISATEUR
include './Utilisateur.php';
$user1 = new Utilisateur(1, 'Doe', 'John');
// $user1->setId(1);
// $user1->setNom('Doe');
// $user1->setPrenom('John');
echo "<p>Utilisateur 1 : " . $user1->getId() . " " . $user1->getNom() . " " . $user1->getPrenom() . "</p>";
$user2 = new Utilisateur(2, 'Foo', 'Bar');
// $user2->setId(2);
// $user2->setNom('Foo');
// $user2->setPrenom('Bar');
echo "<p>Utilisateur 2 : " . $user2->getId() . " " . $user2->getNom() . " " . $user2->getPrenom() . "</p>";

// ANIMAL
include './Animal.php';
$animal1 = new Animal(2, 'Souris', 'Chat');
// $animal1->setId(1);
// $animal1->setLibelle('Souris');
// $animal1->setPredateur('Chat');
echo "<p>Animal 1 : " . $animal1->getId() . " " . $animal1->getLibelle() . " " . $animal1->getPredateur() . "</p>";
$animal2 = new Animal(2, 'Oiseau', 'chat');
// $animal2->setId(2);
// $animal2->setLibelle('Oiseau');
// $animal2->setPredateur('chat');
echo "<p>Animal 2 : " . $animal2->getId() . " " . $animal2->getLibelle() . " " . $animal2->getPredateur() . "</p>";

// SALLE
include './Salle.php';
$salle1 = new Salle(2, 'La Salle 1', '10 personnes', true);
// $salle1->setId(1);
// $salle1->setLibelle('La Salle 1');
// $salle1->setCapacite('10 personnes');
// $salle1->setOccupe(true);
echo "<p>Salle 1 : " . $salle1->getId() . " " . $salle1->getLibelle() . " " . $salle1->getCapacite() . " " . $salle1->getOccupe() . "</p>";
$salle2 = new Salle(2, 'La Salle 2', '15 personnes', false);
// $salle2->setId(2);
// $salle2->setLibelle('La salle 2');
// $salle2->setCapacite('15 personnes');
// $salle2->setOccupe(false);
echo "<p>Salle 2 : " . $salle2->getId() . " " . $salle2->getOccupe() . " " . $salle2->getCapacite() . " " . $salle1->getOccupe() . "</p>";

include './Document.php';
include './Multimedia.php';

// CD
include './Cd.php';
$cd1 = new Cd('Pink Floyd', 'The Wall', 'CdREfPKFLYD', 105, 12);
$cd2 = new Cd('Muse', 'Uno', 'MUno', 80, 13);
echo "<p>cd1 : " . $cd1->getAuteur() . " " . $cd1->gettitre() . " " . $cd1->getReference() . " " . $cd1->getDuree() . " " . $cd1->getNbPlages() . "</p>";
echo "<p>cd2 : " . $cd2->getAuteur() . " " . $cd2->gettitre() . " " . $cd2->getReference() . " " . $cd2->getDuree() . " " . $cd2->getNbPlages() . "</p>";

include './Dvd.php';
$dvd1 = new Dvd('Monty Pythons', 'Sacré Graal', 'MPSG', 115, false);
$dvd2 = new Dvd('Les Nuls', 'La cité de la peur', 'Rechprojpourprojpriv', 120, true);
echo "<p>dvd1 : " . $dvd1->getAuteur() . " " . $dvd1->gettitre() . " " . $dvd1->getReference() . " " . $dvd1->getDuree() . " " . $dvd1->getBonus() . "</p>";
echo "<p>dvd2 : " . $dvd2->getAuteur() . " " . $dvd2->gettitre() . " " . $dvd2->getReference() . " " . $dvd2->getDuree() . " " . $dvd2->getBonus() . "</p>";


include './Livre.php';
$livre1 = new Livre('Le PHP pour les nuls', 'incognito', 'phplalala', 320);
$livre2 = new Livre('Le PHP pour les cadors', 'incognito', 'phpyoupi', 450);
echo "<p>livre1 : " . $livre1->getAuteur() . " " . $livre1->gettitre() . " " . $livre1->getReference() . " " . $livre1->getNbPages() . "</p>";
echo "<p>livre2 : " . $livre2->getAuteur() . " " . $livre2->gettitre() . " " . $livre2->getReference() . " " . $livre2->getNbPages() . "</p>";

?>