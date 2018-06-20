<?php
include('deck\deck.php');

class World {

    private $cards = array();

    public function setDeck()
    {
        $deck = new Deck;
        $deck->setCommonCreature("Gohaould");
        $creatures[] = $deck;
        return $creatures;
    }
}