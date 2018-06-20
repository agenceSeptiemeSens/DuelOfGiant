<?php 
include('cards\creatures\common.php');
class Deck{
    private $cards = array();

    public function setDeck($commonCreatureName){
        $commonCard = new Common;
        $commonCard->setNom($commonCreatureName);
        $cards[] = $commonCard;
        return $commonCard;
    }
}