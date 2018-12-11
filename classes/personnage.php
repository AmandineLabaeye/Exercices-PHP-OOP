<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:40
 */

class personnage {

    public function __construct()
    {
        $this->nom = "Nom par défaut";
        $this->x = 0;
        $this->y = 0;
    }

    public function walkRight()
    {
        $this->x+=1;

    }
} 