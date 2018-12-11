<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

include"classes/personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();

echo $perso->nom;

echo"<br><br>";



$perso2 = new personnage();
$perso2->nom = "Robert";
echo $perso2->nom;



$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
