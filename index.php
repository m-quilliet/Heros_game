<?php

require_once (dirname(__FILE__).'/Hero.php');
require_once (dirname(__FILE__).'/Orc.php');

$sylas = new Hero(2000, 0, 'griffes', 250, 'bouclier', 600);// creer notre hero

$orcy = new Orc(500, 0, 150);// creer notre hero Orc


    while ($sylas->getHealth() > 0 && $orcy->getHealth()> 0){
        $orcy->attack();
        $orcAttack= $orcy->getDamage();
        $sylas -> attacked($orcAttack);

        echo $sylas;
        echo $orcy;
} 




