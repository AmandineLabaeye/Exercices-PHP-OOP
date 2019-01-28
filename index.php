<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

include "classes/personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();

echo $perso->getNom();

echo "<br><br>";

$perso->setId(3);

Echo $perso->getId();

echo "<br><br>";

$perso2 = new personnage();

$perso2->setNom("Robert");

echo $perso2->getNom();




$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
