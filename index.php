<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

include"classes/personnage.php";

$perso = new personnage();

echo $perso->nom;

$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
$perso->walkRight();