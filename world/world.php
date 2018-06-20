<?php
include_once('./deck/deck.php');

class World {

    private $nom;
    private $cards = array();


    public function setDeck($cardName)
    {
        $this->deck = new Deck;
        $this->setCommonCreature($cardName);
        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}