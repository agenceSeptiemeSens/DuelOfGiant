<?php 
include('cards\creatures\common.php');
class Deck{
    private $cards = array();

    public function setDeck($creatures){

        foreach ($creatures as $creature) {
            $commonCard = new Common;
            foreach ($creature as $key => $value) {

                if($key == 'nom'){
                    $commonCard->setNom($value);

                }
                if($key == 'pv'){
                    $commonCard->setPv($value);
                }
                if($key == 'pa'){
                    $commonCard->setPa($value);

                }
                if($key == 'pm'){
                    $commonCard->setPm($value);
                }
                if($key == 'url'){
                    $commonCard->setUrl($value);
                }

            }
            $cards[] = $commonCard;
        }

        return $cards;
    }
}