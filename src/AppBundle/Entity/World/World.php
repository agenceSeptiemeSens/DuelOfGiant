<?php
include('Deck\Deck.php');

class World {

    public function deck($cards)
    {
        $deckRepository = new Deck;
 
        foreach ($cards as $key=>$value) {
            if($key == 'cuisine'){
            $deck['cuisine'][] = $deckRepository->setDeck($value['creatures']);
            }
            if($key == 'cinema'){
                $deck['cinema'][] = $deckRepository->setDeck($value['creatures']);
            }
        }




        return $deck;
    }
}