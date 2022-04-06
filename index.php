<?php
require_once (dirname(__FILE__).'/character.php');
require_once (dirname(__FILE__).'/Hero.php');
require_once (dirname(__FILE__).'/Orc.php');

$brutus = new Hero(2000, 0, 'couteau', 250, 'bouclier', 600);// creer notre hero
echo $brutus;

$Orc = new Orc(500, 0, 150);// creer notre hero Orc
echo $Orc;