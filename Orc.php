<?php

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
    // appelle cette méthode qd on va créer un nouvel objet new Hero
    public function __construct(int $health,int $rage,int $damage){
    //Hero fille de la classe parent Character
    parent::__construct($health,$rage);
    $this->setDamage($damage);
    }       
    public function __toString(){
    return 'Je suis un nouvel héro , ma santé est de : ' .$this->getHealth(). ' et mes dommages sont à '.$this->getDamage();
    }
}
