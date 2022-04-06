<?php

class Hero extends Character{
    //definition attributs de Hero
    private string $_weapon;
    private int $_weaponDamage;
    private string $_shield;
    private int $_shieldValue;

        // getter recuperer la valeur d'un attribut de l'exterieur de la classe // recupere l'attribut rage de la classe en cours
        public function getWeapon():string{
            return $this->_weapon;
        }
        //methode de visi publique qui aura valeur retour sera un entier qui retourne la valeur de l'attribut weapon
        public function getWeaponDamage():int{
            return $this->_weaponDamage;
        }
        public function getShield():string{
            return $this->_shield;
        }
        public function getShieldValue():int{
            return $this->_shieldValue;
        }
        // setter methode permettant de def une arme
        public function setWeapon (string $weapon): void{
            $this->_weapon= $weapon;
        }
        
        public function setWeaponDamage (int $weaponDamage): void{
            $this->_weaponDamage= $weaponDamage;
        }
        public function setShield (string $shield): void{
            $this->_shield= $shield;
        }
        
        public function setShieldValue (int $shieldValue): void{
            $this->_shieldValue= $shieldValue;
        }

// appelle cette méthode qd on va créer un nouvel objet new Hero
    public function __construct(int $health,int $rage,string $weapon,int $weaponDamage,string $shield,int $shieldValue){
        //Hero fille de la classe parent Character
        parent::__construct($health,$rage);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
    }
    public function attacked($attackValue){
        $dmg = $attackValue - $this -> getShieldValue();
        if ($dmg > 0) {
            $this-> setHealth($this->getHealth() - $dmg);
            $this->setRage($this->getRage() + 30);
        }
    }
    public function __toString(){
        return 'Je suis un nouvel héro , mon arme est un ' .$this->getWeapon(). ' et ma protection est un '.$this->getShield().'.';
    }
   // public static function attacked(int $shiedValues,int $health){
        
}


