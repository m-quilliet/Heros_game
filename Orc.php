<?php
require_once (dirname(__FILE__).'/character.php');

class Orc extends Character{
    //definition attributs de Hero
    private int $_damage;

    // getter recuperer la valeur d'un attribut de l'exterieur de la classe // recupere l'attribut rage de la classe en cours
    public function getDamage():int{
        return $this->_damage;
    }
    public function setDamage (int $damage):void{
        $this->_damage= $damage;
    }
    // appelle cette méthode qd on va créer un nouvel objet new orc
    public function __construct(int $health,int $rage){
    //Hero fille de la classe parent Character
    parent::__construct($health,$rage);
    }       
    public function __toString(){
    return '<br/>Je suis un nouvel Orc , mon niveau de santé est de : ' .$this->getHealth(). ' et ma rage est  de '.$this->getRage();
    }
    public function attack():void{
        $this->setDamage (random_int( 600,800));
    }
    public function attacked(int $damageValue, int $rageValue){
        if($rageValue >= 100){
            $this->setHealth($this->getHealth()- $damageValue);
            $this->setRage($this->getRage() +30);
        }
    }
}

