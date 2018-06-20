<?php 
include('.\world\deck\cards\creatures\common.php');
class Deck{
    private $nom;

    /**
     * Get the value of nom
     */ 
    public function getDeckName()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setDeckName($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function setCommonCreature($cardName){
        $this->cardName = new Common;
        $this->setNom("testCreature");
        return $this;
    }
}