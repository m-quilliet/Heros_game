<?php
class Character{
    //def des attributs de l'objet Character
    protected int $_health;
    protected int  $_rage;


    // getter recuperer la valeur d'un attribut de l'exterieur de la classe // recupere l'attribut rage de la classe en cours
    public function getHealth():int{
        return $this->_health;
    }
    public function getRage():int{
        return $this->_rage;
    }

    /** 
     * setter  metho de visibilité public 
     * @param int $health
     * 
     * @return void
     */
    public function setHealth (int $health): void{
        $this->_healt= $health;
    }
    // def methode de visibilté public elle a pour paramétre d'entrée $age on affecte $age à l'attribut _age de l'objet en cours $this
    public function setRage (int $rage): void{
        $this->_rage= $rage;
    }
    //méthode magique construct visant à créer un personnage
    //qd on créer un new cette methodee est appelées automatiquement
    public function __construct($health,$rage)//paramétre d'entrée
    {
        $this->setHealth($health);
        $this->setRage($rage);
    }
}



